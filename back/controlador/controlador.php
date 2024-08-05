<?php
require_once "../modelo/modelo.php";


$function = $_GET['function'];


switch ($function) {

    case "obtenerUsuario":

        obtener();

        break;
    }
function obtener()
{
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $login = (new login())->obtener($usuario, $contraseña);
    echo json_encode($login);

}

?>