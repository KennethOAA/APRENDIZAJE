class Libro:
    def __init__(self, nombreL=None, imagenL=None, documentoL=None, autorL=None, generoL=None, eliminacionL=None):
        self.nombre = nombreL if nombreL is not None else ""
        self.imagen = imagenL if imagenL is not None else b""  # b"" para un valor de imagen vacío en binario
        self.documento = documentoL if documentoL is not None else b""  # b"" para un documento vacío en binario
        self.autor = autorL if autorL is not None else ""
        self.genero = generoL if generoL is not None else ""
        self.eliminacion = eliminacionL if eliminacionL is not None else 0  # Valor por defecto 0 para eliminacion

    def getNombre(self):
        return self.nombre
    
    def getImagen(self):
        return self.imagen
    
    def getDocumento(self):
        return self.documento
    
    def getAutor(self):
        return self.autor
    
    def getGenero(self):
        return self.genero
    
    def getEliminacion(self):
        return self.eliminacion
    

    def setNombre(self,nombreL):
        self.nombre=nombreL
    
    def setImagen(self,imagenL):
        self.imagen=imagenL
    
    def setDocumento(self,documentoL):
        self.documento=documentoL
    
    def getAutor(self,autorL):
        self.autor=autorL
    
    def setGenero(self,generoL):
        self.genero=generoL
    
    def setEliminacion(self,eliminacionL):
        self.eliminacion=eliminacionL
    
