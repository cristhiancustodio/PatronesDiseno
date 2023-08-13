<?php
namespace src;

require_once("../vendor/autoload.php");

use src\Pizza\Americana;
use src\Pizza\Pepperoni;
use src\Pizza\Peruana;



$pizza = new Pepperoni();
$pizza_amaricana = new Americana();
$pizza_peruana = new Peruana();


function ver($texto){
    echo $texto ."<br>";
}

echo "BIENVENIDO A LA PIZZERIA<br>";

ver($pizza_amaricana->descripcion);
ver($pizza_peruana->descripcion);
ver($pizza->descripcion);


$pizza->PrecioBase(90);
$pizza->TamanioFamiliar();
$pizza->anadirMasIngredientes("maiz");
$pizza->anadirMasIngredientes("camote");
$pizza->anadirMasIngredientes("papa");
$pizza->anadirMasIngredientes("yuca");
$pizza->anadirJamon();
$pizza->anadirJamon();
$pizza->anadirJamon();


$precio = $pizza->getPrecio();
$boleta = $pizza->imprimirBoleta();
ver($boleta);



$pizza_amaricana->PrecioBase(20);
$pizza_amaricana->TamanioMediana();
ver($pizza_amaricana->imprimirBoleta());




$pizza_peruana->PrecioBase(30);
$pizza_peruana->TamanioFamiliar();
//$pizza_peruana->agregarCevicheEncima();
//$pizza_peruana->agregarCevicheEncima();
$pizza_peruana->agregarCafe();

ver($pizza_peruana->imprimirBoleta());


?>