<?php

namespace src\Carros;

use src\Carros\Vehiculo;
use src\Objetivo;

class Carro extends Vehiculo
{
    protected $velocidad_maxima;
    protected $objetivo;
    public function __construct(Objetivo $objetivo = null){
        $this->objetivo = $objetivo ?? new Carro();
        $this->numero_ruedas = 4;
        echo $this->getRuedas();
    }
    public function conducir(){
        return $this->objetivo->conducir();
    }
    public function getVelocidadMaxima(){
        return $this->velocidad_maxima;
    }
    public function conduce(){
        
    }
}

?>