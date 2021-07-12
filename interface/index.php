<?php

interface IAutomovil
{

    public function encender();
    public function apagar();
}

interface IGasolina extends IAutomovil
{
    public function vaciarTanque();
    public function llenarTanque($cantidad);
}

class Deportivo implements IGasolina
{

    private $estado = false;
    private $tanque = 0;

    public function estado()
    {
        if ($this->estado) {
            print "El auto está encendido <br>";
        } else {
            print "El auto no está encendido <br>";
        }
    }

    public function encender()
    {
        if ($this->estado) {
            print "El auto ya está encendido y tiene " . $this->tanque . "litros";
        } else {
            if ($this->tanque <= 0) {
                print "El auto no tiene gasolina";
            } else {

                print "auto encendido y tiene " . $this->tanque . " litros de gasolina";
                $estado = true;
            }
        }
    }

    public function apagar()
    {
        if ($this->estado) {
            print "El auto se apagó <br>";
            $estado = false;
        } else {
            print "el auto ya está apagado <br>";
        }
    }

    public function vaciarTanque()
    {
        $this->tanque = 0;;
    }

    public function llenarTanque($cantidad)
    {
        $this->tanque = $cantidad;
    }

    public function usar($km)
    {
        if ($this->estado) {
            $reducir = $km / 3;
            $this->tanque = $this->tanque - $reducir;
            if ($this->tanque <= 0) {
                $this->estado = false;
            }
        } else {
            print "El auto está apagado";
        }
    }
}

$deportivo = new Deportivo();

$deportivo->llenarTanque(100);
$deportivo->encender();
// $deportivo->estado();
$deportivo->usar(250);
$deportivo->estado();
