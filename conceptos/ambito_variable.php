<?php

$variable = "local";

function getVariable()
{
    global $variable;
    return $variable;
}

echo getVariable();
