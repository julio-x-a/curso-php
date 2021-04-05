<?php

require('..\conexion.php');
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

$query = "INSERT INTO users (nombre, edad) VALUES ('$nombre', $edad)";
$result = mysqli_query($conexion, $query) or die ('Fallo');

