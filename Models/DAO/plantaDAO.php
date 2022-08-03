<?php
class plantaDAO extends Query
{
    private $id,$nombre,$siembra,$cantidad,$precio,$categoria;

    public function __construct()
    {
        parent::__construct();
    }

    public function getPlantas()
    {
        $sql = "select * from plantas";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarPlanta($nombre, $siembra, $cantidad, $precio, $categoria)
    {
        $this->nombre = $nombre;
        $this->siembra = $siembra;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->categoria = $categoria;

        $sql = "insert into plantas(nombre,siembra,cantidad,precio,categoria) values (?,?,?,?,?)";
        $data = array(
            $this->nombre,$this->siembra,$this->cantidad,$this->precio,$this->categoria
        );
        $res = $this->save($sql, $data);
        if ($res == 1) {
            return "correcto";
        } else {
            return "error";
        }
    }
}