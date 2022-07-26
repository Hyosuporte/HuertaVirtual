<?php
class Vehiculo{

    private $id;
    private $marca;
    private $modelo;
    private $placa;
    private $tipo;

    public function __construct()
    {
        
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    
}
?>