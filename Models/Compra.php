<?php 
class_implements("./Pedido.php");
class Compra{
    private $compra = array();
    private $id;

    public function Recaudo(){
        
    }

    public function __toString()
    {
        
    }

    public function getCompra(){
        return $this->compra;
    }

    public function setCompra($compra){
        $this->compra = $compra;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

}
?>