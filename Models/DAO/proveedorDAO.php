<?php 
class proveedorDAO extends Query{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getCliente()
    {
        $sql = "select * from proveedores";
        $data = $this->select($sql);
        return $data;
    }

}
?>