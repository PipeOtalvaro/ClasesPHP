<?php
trait TPersona
{
    public $nombre;

    public function mostrarNombre()
    {
        echo $this->nombre;
    }

    abstract function asignarNombre($nombre);
}

trait TTrabajador
{
    protected static function mensaje()
    {
        echo "Soy un trabajador";
    }
}

class Persona
{
    use TPersona, TTrabajador;

    public function asignarNombre($nombre)
    {
        $this->nombre = $nombre . self::mensaje();
    }
}

$persona = new Persona();
$persona->asignarNombre("Andrés");
echo $persona->nombre;
