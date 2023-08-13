<?php
    
namespace src\Carros;

interface VehiculoBase
{
    public function getRuedas();
    public function tipoVehiculo();
    public function numeroAsientos();
    public function tipoCombustible();
    public function marcaVehiculo();
    public function conduce();
    
}

?>