<?php
    

namespace src\Carros;

use src\Carros\VehiculoBase;
abstract class Vehiculo implements VehiculoBase{
    

    protected string $nombre;
    protected string $tipo_vehiculo;
    protected int $numero_ruedas;
    protected int $numero_asientos;

    public function __construct(){
        
    }
    public function getRuedas(){
        return $this->numero_ruedas;
    }
    public function tipoVehiculo(){
        return $this->tipo_vehiculo;
    }
    public function numeroAsientos(){

    }
    public function tipoCombustible(){

    }
    public function marcaVehiculo(){

    }
    public function conduce(){

    }

}

?>