<?php 
require('./Persona.php');
require('./Planta.php');
class Distribuidor extends Persona{

    public $semilla;
    public $cantidad;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setDireccion($dirrecion)
    {
        $this->dirrecion = $dirrecion;
    }

    public function setSemilla($semilla)
    {
        $this->semilla = $semilla;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDireccion()
    {
        return $this->dirrecion;
    }

    public function getSemilla()
    {
        return $this->semilla;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function mensaje()
    {
         print_r("hola");
    }

}
?>