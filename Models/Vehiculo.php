<?php

abstract class Vehiculo{

    protected $placa; 
    protected $color;
    protected $marca;
    protected $modelo;

    abstract public function getPlaca();
    abstract public function setPlaca($variable);
    abstract public function getColor();
    abstract public function setColor($variable);
    abstract public function getMarca();
    abstract public function setMarca($variable);
    abstract public function getModelo();
    abstract public function setModelo($variable);
    abstract public function __toString();

}
?>