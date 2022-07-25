<?php
abstract class Planta{

    public $id;
    public $nombre;
    public $siembra;
    public $riego;
    public $sol;
    public $temperatura;
    public $cuidados;
    public $cantidad;
    public $tipo;

    abstract public function setId($id);
    abstract public function setNombre($nombre);
    abstract public function setSiembra($siembra);
    abstract public function setRiego($riego);
    abstract public function setSol($sol);
    abstract public function setTemperatura($temperatura);
    abstract public function setCuidados($cuidados);
    abstract public function setCantidad($cantidad);
    abstract public function setTipo($tipo);
    abstract public function getId();
    abstract public function getNombre();
    abstract public function getSiembra();
    abstract public function getRiego();
    abstract public function getSol();
    abstract public function getTemperatura();
    abstract public function getCuidados();
    abstract public function getCantidad();
    abstract public function getTipo();

}
?>