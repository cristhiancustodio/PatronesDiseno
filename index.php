<?php 
use src\conexion\conexion;
include_once("vendor/autoload.php");



use src\Pizza\Americana;
use src\Carros\Bicicleta;


$piza = new Americana();
$piza->Descripcion("jiji");
$piza->getNombrePizza();


$bici = new Bicicleta();
//$bici->conduce();


class Controler extends conexion
{
    public string $table = "psicologia";
    public function __construct()
    {
        echo self::escapa();
        echo self::Pasteles();
    }
    public function insertar()
    {
        $this->table("comprobante")->select("comprobante, pasteles")->where("idcomprobante",1)->where("mendigo",3);
        $this->mostrarSql();
    }
    public static function Pasteles() : string
    {
        return "pastelito";
    }
}

$n = new Controler();
$n->insertar();
$n->update("paciente",["idpaciente",4])->mostrarSql();



?>