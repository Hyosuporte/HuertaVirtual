<?php
require('./Persona.php');

class Cliente extends Persona {

    public $telefono;
    public $dirrecion;

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setDireccion($dirrecion){
        $this->dirrecion = $dirrecion;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDireccion(){
        return $this->dirrecion;
    }

}
 ?>