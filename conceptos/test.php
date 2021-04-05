<?php

for ($i=0; $i < 10 ; $i++) { 
    echo "Iteración: " . $i + 1 . "<br>";
}

function getData($num)
{
    return $num % 2 == 0 ? true : false;
}

echo getData(4);

?>