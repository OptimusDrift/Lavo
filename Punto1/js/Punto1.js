function Ajax() {
    function ObtenerXHR() {
        req = false;
        if (window.XMLHttpRequest) {
            req = new XMLHttpRequest();
        }else{
            if (window.ActiveXObject) {
                req = new ActiveXObject("Microsift.XMLHTTP");
            }
        }
    }
    var peteicion = ObtenerXHR();
    var pais = document.getElementById("pais");
    peteicion.open("GET", "../php/Punto1.php?pais="+pais.value, true);
    peteicion.send(null);
    function procesamiento() {
        if (peteicion.readyState == 4) {
            if (peteicion.status==200) {
                var parrafo = document.createElement("p");
                parrafo.innerHTML = peteicion.responseText+"hola";
                document.body.appendChild(parrafo);
            }
        }
    }

}