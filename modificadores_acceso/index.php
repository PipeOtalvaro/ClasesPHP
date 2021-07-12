<?php

class Facebook
{

    public $nombre;
    public $edad;
    private $pass;

    public function __construct($nombre, $edad, $pass)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pass = $pass;
    }

    public function verInformacion()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        $this->cambiarPass("123456");
        echo "Password: " .  $this->pass . " ";
    }

    private function cambiarPass($pass)
    {
        $this->pass = $pass;
    }
}

$face = new Facebook("Andrés Felipe", 25, "789456");
// echo $face->pass;
// $face->cambiarPass("Hola");
$face->verInformacion();
