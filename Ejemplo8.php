<?php

$nombre = $_REQUEST['nombre'];

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
} else {
    $nombre = "no se ha ingresado un nombre";
}
echo "El nombre ingresado es: " .$nombre;
?>