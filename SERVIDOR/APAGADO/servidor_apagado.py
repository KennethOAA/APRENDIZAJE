import http.server
import socketserver
import os
import subprocess

# Define el puerto en el que quieres que escuche el servidor
PORT = 8088

# Crea una subclase de BaseHTTPRequestHandler para manejar las solicitudes de apagado y servir archivos estáticos
class CustomHandler(http.server.BaseHTTPRequestHandler):
    def do_POST(self):
        if self.path == '/shutdown':
            self.send_response(200)
            self.send_header("Content-type", "text/html")
            self.end_headers()
            self.wfile.write(b"Apagando la computadora...")

            # Ejecuta el comando para apagar la computadora
            if os.name == 'nt':  # Si es Windows
                subprocess.run(["shutdown", "/s", "/t", "0"], check=True)
            else:  # Si es Linux o MacOS
                subprocess.run(["sudo", "shutdown", "now"], check=True)
        else:
            self.send_response(404)
            self.end_headers()

    def do_GET(self):
        if self.path == '/':
            self.path = '/index.html'
        return super().do_GET()

# Configura el servidor
with socketserver.TCPServer(("", PORT), CustomHandler) as httpd:
    print(f"Sirviendo en el puerto {PORT}")
    httpd.serve_forever()
