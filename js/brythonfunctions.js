from browser import document
from browser import alert
    def hello(ev):
        alert("Hello !")
    
    document["btn-buscar"].bind("click", hello)