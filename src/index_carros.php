<?php
namespace src;

require_once("../vendor/autoload.php");

use src\Carros\Carro;

class Objetivo
{

}
$n = new Objetivo;
$carro = new Carro($n);

$carro->getVelocidadMaxima();

?>