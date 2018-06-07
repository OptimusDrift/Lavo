<?php
    require_once("BaseDeDatos.class.php");
    $bdd = new BaseDeDatos("inmobiliaria");
    if (isset($_GET['dni'])) {
        $consulta = $bdd->consultar("select ApellidoNombre, domicilio from cliente where nroDocumento=".$_GET['dni']);
        echo $bdd->toString($consulta);
    }
?>