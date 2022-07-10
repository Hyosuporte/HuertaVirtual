<?php
abstract class Planta{

    protected $id;
    protected $fecheSiembra;
    protected $precio;
    protected $temperatura;
    protected $horaSol;
    protected $cuidadoTierra;
    protected $tipoPlanta;
    protected $fechaRiego;

    abstract protected function getId();
    abstract protected function setId($variable);
    abstract protected function getFechaSiembra();
    abstract protected function setFechaSiembra($variable);
    abstract protected function getPrecio();
    abstract protected function setPrecio();
    abstract protected function getTemperatura();
    abstract protected function setTemperatura($variable);
    abstract protected function getHoraSol();
    abstract protected function setHoraSol($variable);
    abstract protected function getCuidadoTierra();
    abstract protected function setCuidadoTierra($variable);
    abstract protected function getTipoPlanta();
    abstract protected function setTipoPlanta($variable);
    abstract protected function getFechaRiego();
    abstract protected function setFechaRiego($variable);

}
?>