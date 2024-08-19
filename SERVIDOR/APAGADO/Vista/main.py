import sys
import os
sys.path.append(os.path.abspath(os.path.join(os.path.dirname(__file__), '..', 'Controlador')))

from conexion import Configuracion
from handler import CustomHandler

# CONFIGURAR LA BASE DE DATOS
configuracion = Configuracion()
cursor,db_config = configuracion.conectarBDD("localhost", "root", "ken123A_.a", "libreria")

#CONFIGURAR LA API
customHandler = CustomHandler
configuracion.iniciarServidor(8088,customHandler)
