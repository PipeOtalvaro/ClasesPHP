<?php
class Vehiculo
{
    public $motor;
    public $marca;
    public $color;

    public function estado()
    {
        if ($this->motor) {
            echo "el motor está enncendido <br>";
        } else {
            echo "el motor está apagado <br>";
        }
    }

    public function encender()
    {
        if ($this->motor) {
            echo "Cuidado, el motor ya está encendido <br>";
        } else {
            echo "el motor está encendido <br>";
            $this->motor = true;
        }
    }
}

class Moto extends Vehiculo
{

    public function estadoMoto()
    {
        $this->estado();
    }
}

class Cuatrimoto extends Moto
{
}

$vehiculo = new Vehiculo;
$vehiculo->estado();
$vehiculo->encender();

$moto = new Cuatrimoto();
$moto->estado();
