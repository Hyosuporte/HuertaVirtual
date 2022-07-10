<?php
class_implements("./Persona.php");
class Agricultor extends Persona
{

    private $direccion;

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getDni()
    {
        return $this->dni;
    }

    function setDni($dni)
    {
        $this->dni = $dni;
    }

    function getTelefono()
    {
        return $this->telefono;
    }

    function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    function getDireccion()
    {
        return $this->direccion;
    }

    function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    function __toString()
    {
    }
}
