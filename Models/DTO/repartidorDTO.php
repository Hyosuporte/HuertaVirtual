<?php 
require('./Persona.php');
class repartidorDTO extends Persona {

    public $id_vehiculo;
    public $password;

    public function __construct()
    {
        $this->email = "";
        $this->nombre = "";
        $this->password = "";
        $this->id_vehiculo = "";
    }

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

    public function setIdVehiculo($idVehiculo)
    {
        $this->id_vehiculo = $idVehiculo;
    }

    public function setPassword($password)
    {
        $this->password = $password;
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

    public function getIdVehiculol()
    {
        return $this->id_vehiculo;
    }

    public function getPassword()
    {
        return $this->password;
    }

}
?>