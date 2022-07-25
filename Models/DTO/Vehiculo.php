<?php

abstract class Vehiculo{

    public $id;
    public $marca;
    public $modelo;
    public $placa;
    public $tipo;
    
    abstract public function setId($id); 
    abstract public function setMarca($marca);
    abstract public function setModelo($modelo);
    abstract public function setPlaca($placa);
    abstract public function setTipo($tipo);
    abstract public function getId();
    abstract public function getMarca();
    abstract public function getModelo();
    abstract public function getPlaca();
    abstract public function getTipo();
    
}
?>