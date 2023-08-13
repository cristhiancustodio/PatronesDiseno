<?php
namespace src\Pizza;


use src\Pizza\Pizza;    

class Pepperoni extends Pizza{

    public $nombre_pizza = "Pepperoni";
    
    public function __construct(){
        $descripcion = "esta es la descripcion de la pizza peperono";
        $this->Descripcion($descripcion);
    }
    public function anadirJamon(){
        $this->anadirMasIngredientes("jamon");
        $this->precio +=5;
    }

}

?>