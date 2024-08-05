<?php
require_once "../conexion/conexion.php";


class imagen {


    public function agregarImagen( $imagen){
        $connection = connection();
        $nomImg = $imagen['name'];
        $sql = "INSERT INTO imagenes VALUES('$nomImg');";
        $connection->query($sql);
        $rutaTemp = $imagen['tmp_name'];
        move_uploaded_file($rutaTemp, "../img/$nomImg");
    }


    public function obtenerImagen(){

        $connection = connection();
        $sql = "SELECT * FROM imagenes";
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;

    }



}
