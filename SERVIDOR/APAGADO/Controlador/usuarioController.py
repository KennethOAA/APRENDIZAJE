from Modelo import usuario

class UsuarioController:
    def __init__(self, usuario=None,cursor=None,dbConfig=None):
        self.usuario=usuario
        self.cursor=cursor
        self.dbConfig=dbConfig
    
    def agregarUsuario(self):
        sql = "INSERT INTO usuario (nombre, usuario, contrasena, eliminacion) VALUES (%s, %s, %s, %s)"
        valores = (usuario.getNombre(), usuario.getUsuario(), usuario.getContrasena(), usuario.getEliminacion())
        self.cursor.execute(sql, valores)
        self.dbConfig.commit()
        # Cerrar la conexión
        self.cursor.close()
        self.dbConfig.close()
    
    def modificarUsuario(self):
        sql = "INSERT INTO usuario (nombre, usuario, contrasena, eliminacion) VALUES (%s, %s, %s, %s)"
        valores = (usuario.getNombre(), usuario.getUsuario(), usuario.getContrasena(), usuario.getEliminacion())
        self.cursor.execute(sql, valores)
        self.dbConfig.commit()
        # Cerrar la conexión
        self.cursor.close()
        self.dbConfig.close()     