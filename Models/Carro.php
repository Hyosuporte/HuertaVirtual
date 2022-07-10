<?php
class_implements('./Vehiculo.php');

class Carro extends Vehiculo{

    function getPlaca(){
        return $this->placa;
    }

    function setPlaca($variable){
        $this->placa =$variable;
    }

    function getColor(){
        return $this->color;
    }

    function setColor($variable){
        $this->color = $variable;
    }

    function getMarca(){
        return $this->marca;
    }

    function setMarca($variable){
        $this->marca = $variable;
    }

    function getModelo(){
        return $this->modelo;
    }
    
    function setModelo($variable){
        $this->modelo = $variable;
    }

    function __toString(){
        
    }

}
?>