<?php

$arr = ['Nombre' => 'Julio', 'Pais' => 'Colombia', 'Edad' => 23];
$arr['Pais'] = 'Mexico';

// echo is_array($arr);

// foreach ($arr as $key => $value) {
//     echo "$key: $value \n";
// }

//Array Asociativo multidimensional

$alimentos = [
    'fruta' => [
        'tropical' => 'kiwi',
        'citrico' => 'naranja',
        'otros' => 'manzana'
    ],
    'leche' => [
        'animal' => 'vaca',
        'vegetal' => 'coco'
    ],
    'carne' => [
        'vacuno' => 'lomo',
        'porcino' => 'pata'
    ]
];

function printTest($arr)
{
    foreach ($arr as $key => $value) {
        echo is_array($value) ? printTest($value) : "$value \n ";
    }
}

$a = [1,2,3];


