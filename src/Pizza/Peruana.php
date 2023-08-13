<?php
namespace src\Pizza;

use src\Pizza\Pizza;

class Peruana extends Pizza
{
    protected $nombre_pizza = "Peruana Extrema";
    public function __construct(){
        $descripcion = "Esta es la descripcion de la pizza peruana";
        $this->Descripcion($descripcion);
    }
    public function agregarCafe(){
        $this->anadirMasIngredientes("Cafe");
        $this->precio += 5;
    }
    public function agregarCevicheEncima(){
        $this->anadirMasIngredientes("Ceviche");
        $this->precio += 35;
    }
}
?>