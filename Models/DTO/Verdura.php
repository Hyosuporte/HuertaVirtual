<?php
class_implements('./Hortaliza.php');
class Verdura{

    function getId(){
        return $this->id;
    }
    
    function setId($variable){
        $this->id = $variable;
    }

    function getFechaSiembra(){
        return $this->fecheSiembra;
    }

    function setFechaSiembra($variable){
        $this->fecheSiembra = $variable;
    }

    function getPrecio(){
        return $this->precio;
    }

    function setPrecio($variable){
        $this->precio = $variable;
    }

    function getTemperatura(){
        return $this->temperatura;
    }

    function setTemperatura($variable){
        $this->temperatura = $variable;
    }

    function getHoraSol(){
        return $this->horaSol;
    }

    function setHoraSol($variable){
        $this->horaSol = $variable;
    }

    function getCuidadoTierra(){
        return $this->tierra;
    }

    function setCuidadoTierra($variable){
        $this->cuidadoTierra = $variable;
    }

    function getTipoPlanta(){
        return $this->tipoPlanta;
    }

    function setTipoPlanta($variable){
        $this->tipoPlanta = $variable;
    }

    function getFechaRiego(){
        return $this->fechaRiego;
    }

    function setFechaRiego($variable){
        $this->fechaRiego = $variable;
    }

}
?>