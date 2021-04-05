<?php

function incrementar()
{   
    static $count = 0;
    return $count++;
}

for ($i = 0; $i < 10; $i++) { 
    echo incrementar() . "<br>";
}
