<?php

declare(strict_types=1);

namespace src\Eventos\Envios;

class Envio
{
    public function __construct(){

    }

    public function generarEnvio(string $mensaje) : string{
        return $mensaje;
    }


    public function reenviarCorreo(string $mensaje) : string{
        return $mensaje;
    }







}
