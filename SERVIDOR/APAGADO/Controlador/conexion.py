import socketserver
import mysql.connector

class Configuracion:
    def __init__(self):
        # Inicializa los atributos con valores predeterminados
        hostux=""

    def conectarBDD(self,hostux,userux,passwordux,databaseux):
        db_config = mysql.connector.connect(
                    host=hostux,
                    user=userux,
                    password=passwordux,
                    database=databaseux
                )
        cursor = db_config.cursor()
        return cursor,db_config

    def iniciarServidor(self,PORT,CustomHandler):
        #PORT = 8088
        with socketserver.TCPServer(("", PORT), CustomHandler) as httpd:
            print(f"Sirviendo en el puerto {PORT}")
            httpd.serve_forever()