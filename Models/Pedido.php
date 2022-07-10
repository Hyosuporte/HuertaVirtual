<?php
class_implements("./Planta.php");
class_implements("./Repartidor.php");
class Pedido{

    private $id;
    private $dniRep = new  Repartidor();
    private $planta = new Planta();
    private $cantPlan;

    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id = $id;
    }

    public function getdniRep(){
        return $this->dniRep;
    }

    public function setdniRep($dniRep){
        $this->dniRep = $dniRep;
    }

    public function getPlanta(){
        return $this->planta;
    }

    public function setPlanta($planta){
        $this->planta = $planta;
    }

    public function getCantPlan(){
        return $this->cantPlan;
    }

    public function setCantPlan($cantPlan){
        $this->cantPlan = $cantPlan;
    }

}
 ?>