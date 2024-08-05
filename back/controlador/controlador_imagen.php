<?php
require_once "../modelo/modelo_imagen.php";


$function = $_GET['function'];


switch ($function) {

    case "obtenerImagen":

        obtener();

        break;

    case "agregarImagen":

        subir();
        break;
}



function obtener()
{
    $imagenes = (new imagen())->obtenerImagen();
    echo json_encode($imagenes);

}


function subir()
{
    $imagen = $_FILES ['imagen'];
   $resultado = (new imagen())->agregarImagen($imagen);
   echo json_encode($resultado);

}

?>

