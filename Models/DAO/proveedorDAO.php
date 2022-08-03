<?php
class proveedorDAO extends Query
{
    private $email, $nombre, $semilla, $cantidad, $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function getProveedores()
    {
        $sql = "select * from proveedores";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function consultarProveedor(int $id)
    {
        $sql = "select * from proveedores p WHERE p.id = $id";
        $data = $this->select($sql);
        return $data;
    }

    public function modificarProveedor(
        string $email,
        string $nombre,
        string $semilla,
        int $cantidad,
        int $id
    ) {
        /* Datos Proveedor */
        $this->email = $email;
        $this->nombre = $nombre;
        $this->semilla = $semilla;
        $this->cantidad = $cantidad;
        $this->id = $id;

        /* Insercion proveedor */
        $sql = "update proveedores set nombre = ? , email = ? ,semillas = ? , cantidad = ? where id = ?";
        $data = array(
            $this->nombre, $this->email, $this->semilla, $this->cantidad, $id
        );
        $res = $this->save($sql, $data);
        if ($res == 1) {
            return "Modificado";
        } else {
            return "error al modificado el proveedor";
        }
    }

    public function registrarProveedor(
        string $email,
        string $nombre,
        string $semilla,
        int $cantidad
    ) {
        /* Datos Proveedor */
        $this->email = $email;
        $this->semilla = $semilla;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;

        /* Insercion Proveedor */
        $sql = "insert into proveedores(nombre,email,semillas,cantidad) values (?,?,?,?)";
        $data = array(
            $this->nombre, $this->email, $this->semilla, $this->cantidad
        );
        $res = $this->save($sql, $data);
        if ($res == 1) {
            return "correcto";
        } else {
            return "error";
        }
    }

    public function eliminarPro(int $id)
    {
        $this->id = $id;
        $sql = "delete from proveedores where id = ?";
        $datos = array($this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }

}
