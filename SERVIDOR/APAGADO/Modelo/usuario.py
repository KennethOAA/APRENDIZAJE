class Usuario:
    def __init__(self, nombre=None, usuario=None,contrasena=None,eliminacion=None):
        self.nombre = nombre if nombre is not None else ""
        self.usuario = usuario if usuario is not None else ""
        self.contrasena = contrasena if contrasena is not None else ""
        self.eliminacion = eliminacion if eliminacion is not None else 0
    
    def getNombre(self):
        return self.nombre
    
    def getUsuario(self):
        return self.usuario
    
    def getContrasena(self):
        return self.contrasena
    
    def getEliminacion(self):
        return self.eliminacion
    
    def setNombre(self,nombre):
        self.nombre=nombre

    def setUsuario(self,usuario):
        self.usuario=usuario
    
    def setContrasena(self,contrasena):
        self.contrasena=contrasena
    
    def setEliminacion(self,eliminacion):
        self.eliminacion=eliminacion
