<?php

require_once "../../vendor/autoload.php";

use src\Eventos\Envios\Envio;
use src\Eventos\Envios\EnvioAptitud;
    
    
    echo "<pre>";
    echo (new EnvioAptitud)->obtenerInformacion();
    echo "</pre>";
    //echo (new EnvioAptitud)->generarEnvio();
    

    echo "<br>";
    echo (new Envio())->reenviarCorreo("mensaje de mi bichito");
?>