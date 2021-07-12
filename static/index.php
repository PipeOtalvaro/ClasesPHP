<?php
class Pagina
{
    public $nombre = "Andrés";
    public  static $url = "www.bienvenido.com";

    public function bienvenido()
    {
        echo "Bienvenido <b>" . $this->nombre . "</b> la página es <b>" . Pagina::$url . "</b>";
    }

    public static function despedida()
    {
        echo "Chao " . self::$url . "que le vaya bien </b>";
    }
}

class Web extends Pagina
{
}

$pagina = new Pagina();
$pagina->bienvenido();

Pagina::despedida();
Web::despedida();
