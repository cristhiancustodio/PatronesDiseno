<?php

declare(strict_types=1);

namespace src\Eventos\Envios;

class EnvioAptitud extends EnviosAbstract 
{

    public $tipo_correo = 55;
    public function __construct(){
        parent::__construct();
    }


    public function nuevosDestinatarios(): array{
        return ["primer elemento"];
    }

    public function obtenerConsultaCorreos(): array{
        return [];
    }


}
