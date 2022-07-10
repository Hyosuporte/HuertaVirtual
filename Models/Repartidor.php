<?php 
class_implements('./Persona.php');
class_implements('./Vehiculo.php');
class Repartidor extends Persona {

    private $vehiculo = new Vehiculo();

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
?>