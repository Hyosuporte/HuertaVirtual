<?php 
abstract class Persona{
    protected $nombre;
    protected $dni;
    protected $telefono;

    abstract public function getNombre();
    abstract public function setNombre($variable);
    abstract public function getDni();
    abstract public function setDni($variable);
    abstract public function getTelefono();
    abstract public function setTelefono($variable);
    abstract public function __toString();

}

?>