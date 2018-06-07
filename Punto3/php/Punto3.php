<?php
    include_once("BaseDeDatos.class.php");
    $bdd = new BaseDeDatos("tienda");
    if (isset($_GET['producto'])) {
        $consulta = $bdd->consultar("select * from producto where nombre = \"".$_GET['producto']."\"");
        echo $bdd->toString($consulta);
    }
?>