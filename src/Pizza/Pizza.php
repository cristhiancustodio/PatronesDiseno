<?php
    
namespace src\Pizza;

use src\Pizza\PizzaBase;


abstract class Pizza implements PizzaBase
{
    protected $gramos_queso;
    protected $gramos_salsa;
    protected $precio;
    protected $tamanio;
    protected $nombre_pizza;
    protected $ingrediente = [];
    public $descripcion;
    protected $foto;
    protected $ingrediente_convertido = [];
    public function Descripcion(string $descripcion) : string{
        return $this->descripcion = $descripcion;
    }   
    public function Foto(string $foto) : string{
        return $this->foto = $foto;
    }
    public function setNombePizza(string $nombre_pizza) : string{
        return $this->nombre_pizza = $nombre_pizza;
    }
    public function getNombrePizza(){
        return $this->nombre_pizza;
    }
    public function Tamanio(string $tamanio) : string {
        return $this->tamanio = $tamanio;
    }
    public function PrecioBase(int|float $precio) : int|float{
        return $this->precio = $precio; 
    }
    public function anadirQueso(int|float $gramos_queso){
        return $this->gramos_queso = $gramos_queso;
    }
    public function anadirSalsa(int|float $gramos_salsa){
        return $this->gramos_salsa = $gramos_salsa;
    }
    public function getPrecio() : int|float{
        return $this->precio;
    }
    public function anadirMasIngredientes(string $ingrediente){
        $this->ingrediente[] = $ingrediente;
    
    }
    private function getIngredientes() : string{
        $conteo = array_count_values($this->ingrediente);
        foreach($conteo as $key=>$val){
            if($val > 1){
                $this->ingrediente_convertido[] = ucfirst($key)." x ".$val;
            }else{
                $this->ingrediente_convertido[] = ucfirst($key);
            }
        }
        $ingredientes_string = implode(", ",$this->ingrediente_convertido);
        return $ingredientes_string;
    }
    public function TamanioFamiliar(){
        $this->tamanio = "Familiar";
        $this->precio += 30;
    }
    public function TamanioPersonal(){
        $this->tamanio = "Personal";
        $this->precio += 10;
    }
    public function TamanioMediana(){
        $this->tamanio = "Mediana";
        $this->precio += 20;
    }
    public function imprimirBoleta() : string {
        $boleta = "Tamaño de Pizza : ".$this->tamanio." -  Pizza : " . $this->getNombrePizza() ."- ingredientes:". $this->getIngredientes()." precio total: " . $this->getPrecio();
        return $boleta;
    }

}



?>