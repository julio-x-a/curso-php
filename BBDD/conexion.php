<?php

$db_host = 'localhost';
$db_name = 'php';
$db_user = 'root';
$db_pwd = '';

//*---- Conexión por procedimientos -----*/

$conexion = mysqli_connect($db_host, $db_user, $db_pwd, $db_name) or die("Fallo");

// $query = 'SELECT * FROM users';
// $result = mysqli_query($conexion, $query);

//** ----- mysqli_fetch_row * ------/

// while ($rows = mysqli_fetch_row($result)) {
//     foreach($rows as $row){
//         echo "$row ";
//     }
//     echo "\n";
// }
//** ----- mysqli_fetch_array * ------/

// while ($rows = mysqli_fetch_array($result)) {
//     echo $rows['nombre'];
//     echo "\n";
// }

// mysqli_close($conexion);