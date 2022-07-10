<?php 
class_implements('./Persona.php');
class_implements('./Planta.php');
class Distribuidor extends Persona implements Planta {

    private $semilla = new Planta();

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

    function getId(){
        return $this->id;
    }

    function setId($variable){
        $this->id = $variable;
    }

    function getPrecio(){
    return $this->precio;
    }

    function setPrecio($variable){
        $this->precio = $variable;
    }

    function getTipoPlanta(){
    return $this->tipoPlanta;
    }

    function setTipoPlanta($variable){
        $this->tipoPlanta = $variable;
    }


    function __toString()
    {
    }
}
?>