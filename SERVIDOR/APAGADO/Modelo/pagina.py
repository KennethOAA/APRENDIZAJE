class Pagina:
    def __init__(self, paginaTotal=None, paginaActual=None,libro=None):
        self.paginaTotal = paginaTotal if paginaTotal is not None else 0
        self.paginaActual = paginaActual if paginaActual is not None else 0
        self.libro = libro if paginaActual is not None else 0

    def getPaginaTotal(self):
        return self.paginaTotal
    
    def getPaginaActual(self):
        return self.paginaActual
    
    def getLibro(self):
        return self.libro
    
    def setPaginaTotal(self,paginaTotal):
        self.paginaTotal = paginaTotal

    def setPaginaActual(self,paginaActual):
        self.paginaActual = paginaActual
    
    def setLibro(self,libro):
        self.libro=libro