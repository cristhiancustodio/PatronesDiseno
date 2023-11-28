<?php

namespace src\Carros;

use src\Carros\Vehiculo;


class Bicicleta extends Vehiculo
{
    public function __construct(){
        parent::__construct();
    }
    public function conduce(){
        echo "conduciendo";
    }
}

?>