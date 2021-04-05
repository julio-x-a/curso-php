<?php
class Dog
{
    protected $raza;
    protected $color;

    function __construct($raza) /*Clase constructora */
    {
        $this->raza = $raza;
    }

    function setColor(String $color)
    {
        $this->color = $color;
    }

    function getColor()
    {
        return $this->color;
    }

    function ladrar()
    {
        echo 'Ladrando';
    }
}


$dog = new Dog("Dalmata");
$dog->setColor('Marron');
echo $dog->getColor() . "\n";
$dog->ladrar();


//  -------- HERENCIA --------- //

class Animal
{
    private $tipo;
    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }
    function getTipo()
    {
        return $this->tipo;
    }
}


class Cat extends Animal
{
    private $raza;
    function __construct($raza, $tipo)
    {
        parent::__construct($tipo);
        $this->raza = $raza;
    }

    function setRaza($raza)
    {
        $this->raza = $raza;
    }

    function getRaza()
    {
        return $this->raza;
    }
}

$cat1 = new Cat('Albino', 'Mamífero');
$cat1->setRaza('Normal');
echo $cat1->getTipo() . "\n";
echo $cat1->getRaza() . "\n";
