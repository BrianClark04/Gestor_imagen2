<?php
require_once "../conexion/conexionU.php";


class login {
public function obtener($usuario,$contraseña){
    
        $connection = connection();
        $sql = "SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
        $respuesta = $connection->query($sql);
        
        if (($respuesta->num_rows) > 0) {
            $row = mysqli_fetch_assoc($respuesta);
            session_start();
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['contraseña'] = $row["contraseña"];
        $datos= [
"usuario" => $_SESSION['usuario'],
"contraseña" => $_SESSION['contraseña']
        ];
            return $datos;
        } else {
            echo "usuario incorrecto";
        }
    }
}
