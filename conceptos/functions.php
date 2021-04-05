<?php

$frase = "Slytherin";

function reference(&$var)
{
    return strtoupper($var);
}

function longitudVariable(...$numeros)
{
    foreach ($numeros as $numero) {
        echo $numero * 2;
    }
}

// longitudVariable(1,2,3,4,5);

$arrayBi = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9] 
];

// for ($i = 0; $i < count($arrayBi); $i++) { 
//     for ($j=0; $j < count($arrayBi[$i]) ; $j++) { 
//         echo 
//     }
// }

foreach ($arrayBi as $array) {
    foreach ($array as $key => $value) {
        echo $value;
    }
}
