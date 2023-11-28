<?php

namespace src\conexion;


class conexion implements IConect
{
    public string $table = '';
    public string $query = '';
    private conexion $conexion ;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function table(string $tabla)
    {
        $this->table = $tabla;
        return $this;
    }
    public function select(string $sql)
    {
        $this->query .= "SELECT " . $sql . " FROM " . $this->table;
        return $this;
    }
    public function insert(string $sql)
    {
    }
    public function update(string $sql, array $campo)
    {
        $this->query = "UPDATE " . $this->table . " set $sql=1" . " where " . $campo[0] . " = " . $campo[1];
        return $this;
    }
    public function where(string $condicion, int|string  $id)
    {
        if (strpos($this->query, 'WHERE') === false) {
            $this->query .= " WHERE $condicion =" . $id;
        }else{
            $this->query .= " AND WHERE $condicion =" . $id;

        }
        return $this;
    }
    public function mostrarSql()
    {
        $dibujos = ["==>",":/","(Y)"];
        echo "<pre>";
        print_r( $this->query );
        echo "</pre>";
    }
    public static function escapa() : string{
        return "yasmin";
    }
}
