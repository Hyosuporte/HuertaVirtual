<?php 
require('./Persona.php');
class Repartidor extends Persona {

    public $id_vehiculo;

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

}
?>