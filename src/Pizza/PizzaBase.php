<?php
    
namespace src\Pizza;

interface PizzaBase
{

    public function PrecioBase(int|float $precio) : int|float; 
    public function Tamanio(string $tipo) : string;
    public function Descripcion(string $descripcion) : string;
    public function Foto(string $foto) : string;
    public function TamanioFamiliar();
    public function TamanioPersonal();
    public function TamanioMediana();

}

?>