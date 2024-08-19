class LibroUsuario:
    def __init__(self, idLibro, idUsuario,calificacion,favorito,eliminacion):
        self.idLibro = idLibro
        self.idUsuario = idUsuario
        self.calificacion=calificacion
        self.favorito=favorito
        self.eliminacion =eliminacion
    
    def getIdUsuario(self):
        return self.idUsuario
    
    def getIdLibro(self):
        return self.idLibro
    
    def getCalificacion(self):
        return self.calificacion
    
    def getFavorito(self):
        return self.favorito
    
    def getEliminacion(self):
        return self.eliminacion


    def setIdUsuario(self,idUsuario):
        self.idUsuario=idUsuario
    
    def setIdLibro(self,idLibro):
        self.idLibro=idLibro
    
    def setCalificacion(self,calificacion):
        self.calificacion=calificacion
    
    def setFavorito(self,favorito):
        self.favorito = favorito
    
    def setEliminacion(self,eliminacion):
        self.eliminacion=eliminacion