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
        return req;
    }
    var peteicion = ObtenerXHR();
    var pais = document.getElementById("pais");
    alert(pais.value);
    var temp = "../php/Punto1.php?pais="+pais.value;
    peteicion.open("GET", temp, true);
    peteicion.onreadystatechange = procesamiento;
    peteicion.send(null);
    function procesamiento() {
        if (peteicion.readyState == 4) {
            if (peteicion.status==200) {
                var parrafo = document.createElement("p");
                parrafo.innerHTML = peteicion.responseText;
                document.body.appendChild(parrafo);
            }
        }
    }

}