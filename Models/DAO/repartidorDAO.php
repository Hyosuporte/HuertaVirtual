<?php
class repartidorDAO extends Query
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getRepartidor(string $email, string $password)
    {
        $sql = "select * from repartidores where email = '$email' and password = '$password'";
        $data = $this->select($sql);
        return $data;
    }

    public function getRepartidores(){
        $sql = "select * from repartidores";
        $data = $this->selectAll($sql);
        return $data;
    }
    
}
