<?php

abstract class Molde
{

    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}

class Persona extends Molde
{
    private $mensaje = "Hola mundo";

    public function mostrar()
    {
        print $this->mensaje;
    }
    public function ingresarNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function obtenerNombre()
    {
        print $this->nombre;
    }
}

$persona = new Persona();
$persona->ingresarNombre("Andrés");
$persona->obtenerNombre();
