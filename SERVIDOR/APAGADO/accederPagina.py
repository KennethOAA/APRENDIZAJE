import http.server
import socketserver
import os
import subprocess
import time

PORT = 8088

class CustomHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        if self.path == '/':
            self.path = 'index.html'  
        return http.server.SimpleHTTPRequestHandler.do_GET(self)

    def do_POST(self):
        print(f"Path recibido: {self.path}")  # Para depuración

        # Lee el cuerpo de la solicitud para obtener los parámetros
        content_length = int(self.headers['Content-Length'])
        post_data = self.rfile.read(content_length).decode('utf-8')
        parametros = dict(param.split('=') for param in post_data.split('&'))
        
        tiempo = int(parametros.get('tiempo', 0))  # Por defecto 0 si no se proporciona
        unidad = parametros.get('unidad', 'Segundos')  # Por defecto segundos si no se proporciona

        # Conversión del tiempo según la unidad
        if unidad == 'Minutos':
            tiempo *= 60
        elif unidad == 'Horas':
            tiempo *= 3600
        elif unidad == 'Dias':
            tiempo *= 86400
        # Si es 's' (segundos), no se necesita conversión

        # Espera antes de realizar la acción
        time.sleep(tiempo)

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
        
        elif self.path == '/restart':
            self.send_response(200)
            self.send_header("Content-type", "text/html")
            self.end_headers()
            self.wfile.write(b"Reiniciando la computadora...")

            # Ejecuta el comando para reiniciar la computadora
            if os.name == 'nt':  # Si es Windows
                subprocess.run(["shutdown", "/r", "/t", "0"], check=True)
            else:  # Si es Linux o MacOS
                subprocess.run(["sudo", "reboot"], check=True)

        elif self.path == '/suspend':
            self.send_response(200)
            self.send_header("Content-type", "text/html")
            self.end_headers()
            self.wfile.write(b"Suspender la computadora...")

            # Ejecuta el comando para suspender la computadora
            if os.name == 'nt':  # Si es Windows
                subprocess.run(["rundll32.exe", "powrprof.dll,SetSuspendState", "0,1,0"], check=True)
            else:  # Si es Linux o MacOS
                subprocess.run(["systemctl", "suspend"], check=True)

        else:
            self.send_response(404)
            self.end_headers()

# Configura el servidor
with socketserver.TCPServer(("", PORT), CustomHandler) as httpd:
    print(f"Sirviendo en el puerto {PORT}")
    httpd.serve_forever()
