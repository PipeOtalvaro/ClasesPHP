<?php

class Persona
{

    public $nombre;
    public $apellido;

    public function guardar($nombre, $apellido)
    {
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;
    }

    public function mostrar()
    {
        for ($i = 0; $i < count($this->nombre); $i++) {
            Persona::formato($this->nombre[$i], $this->apellido[$i]);
            $this->formato($this->nombre[$i], $this->apellido[$i]);
        }
    }

    public static function formato($nombre, $apellido)
    {

        echo "Nombre: ", $nombre, "| Apellido:", $apellido, "<br>";
    }
}

$persona = new Persona();
$persona->guardar("Felipe", "Otálvaro");
$persona->guardar("Brenda", "Orozco");
$persona->mostrar();
