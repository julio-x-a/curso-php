<?php

require('..\conexion.php');
$id = $_POST['id'];

$query = "DELETE FROM users WHERE id_user = $id";
$result = mysqli_query($conexion, $query) or die ('Fallo');

