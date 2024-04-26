<?php

declare(strict_types=1);

namespace src\Eventos\Envios;

abstract class EnviosAbstract extends Envio
{

    protected $tipo_correo = 0;
    protected $tipo_correo_envio = 0;
    abstract public function nuevosDestinatarios() : array;
    abstract public function obtenerConsultaCorreos() : array;

    public function generarDatosParaEnviar(string $datos_enviar) : string{
        return ($datos_enviar)." contatenado";
    }

    protected function verificarDestinatarios(){
        return $this->nuevosDestinatarios();
    }



    public function generandoEnvioMasivo(){

        var_dump($this->verificarDestinatarios());
        $this->generarEnvio("Enviando mensaje");
    }
    public function obtenerInformacion(){
        var_dump($this->nuevosDestinatarios());
        var_dump($this->obtenerConsultaCorreos());
        var_dump($this->tipo_correo);
        var_dump($this->generarEnvio("Enviando correo"));
    }
}
