<?php
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$operacion = $_POST['operacion'];

switch ($operacion) {
    case 'suma':
        echo "Resultado: " . $numero1 + $numero2;
        break;
    case 'resta':
        echo "Resultado: " . $numero1 - $numero2;
        break;     
    case 'mult':
        echo "Resultado: " . $numero1 * $numero2;
        break;   
    case 'div':
        echo "Resultado: " . $numero1 / $numero2;
        break;  
    case 'mod':
        echo "Resultado: " . $numero1 % $numero2;
        break;          
}
