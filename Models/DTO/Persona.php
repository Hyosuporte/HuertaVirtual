<?php 
abstract class Persona{
    public $id;
    public $nombre;
    public $email;
 
    abstract public function setId($objet);
    abstract public function setNombre($objet);
    abstract public function setEmail($objet);
    abstract public function getId();
    abstract public function getNombre();
    abstract public function getEmail();

}

?>