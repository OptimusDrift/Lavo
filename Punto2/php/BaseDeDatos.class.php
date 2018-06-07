<?php
class BaseDeDatos {
    private $baseDeDatos;
    function __construct($bdd) {
        $this->baseDeDatos = new mysqli("localhost","root","",$bdd);
    }
    public function consultar($query){
        $resultado = $this->baseDeDatos->query($query) or die ("No se pudo ejecutar la consulta de seleccion");
        return $resultado;
    }
    public function toString($resultado){
        if ($resultado->num_rows>0) {
            $contador = 0;
            //Recorrido del recordset
            $str = "";
            while ($registro = $resultado->fetch_object()) {
                $contador ++;
                $str .="Nombre y apellido: ".$registro->ApellidoNombre."<br>";
                $str .="Domicilio: ".$registro->domicilio."<br>";
            }
            return $str;
        }else {
            return "<h3>No se encontraron registros</h3>";
        }
    }
    public function cerrarConeccion($resultado){
        //Libreacion de la memoria utilizada por el recordset
        $resultado->free();
        //Cierre de la conexion
        $this->baseDeDatos->close();
    }
    public function insertar($query){
        $this->baseDeDatos->query($query) or die ("No se pudo insertar el elemento");
        echo "Se inserto el elemento";
    }
}
?>