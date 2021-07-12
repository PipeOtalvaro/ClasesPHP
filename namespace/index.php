<?php

spl_autoload_register(function ($clase) {

    $ruta = "api/" . str_replace("\\", "/", $clase) . ".php";
    if (is_readable($ruta)) {
        require_once $ruta;
    } else {
        echo "el archivo no existe";
    }
});

Models\Persona::Hola();
Controllers\PersonaControllers::Hola();
