<?php

require('conexion.php');

$seccion = $_POST['seccion'];
$nombre = $_POST['nombre_art'];
$fecha = $_POST['fecha'];
$pais = $_POST['pais'];
$precio = $_POST['precio'];

$query = "INSERT INTO ARTICULOS VALUES (
    '$seccion',
    '$nombre', 
    '$fecha', 
    '$pais', 
    $precio)";

echo mysqli_query($conexion, $query) ? "Articulo guardado!" : "Vuelve a intentarlo";

