<?php 

namespace src\conexion;

interface IConect
{
    public function table(string $sql);
    public function select(string $sql);
    public function insert(string $sql);
    public function update(string $sql, array $campo);
}

?>