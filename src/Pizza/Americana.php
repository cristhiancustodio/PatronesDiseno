<?php
namespace src\Pizza;

use src\Pizza\Pizza;

class Americana extends Pizza
{
    protected $nombre_pizza = "Americana";


    public function __construct(){
        $descripcion = "Esta es la descripcion de la pizza Americana";
        $this->Descripcion($descripcion);
    }
}
?>