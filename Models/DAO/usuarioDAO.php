<?php
class usuarioDAO extends Query
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario(string $email, string $password)
    {
        $sql = "select * from clientes where email = '$email' and password = '$password'";
        $data = $this->select($sql);
        if ($data) {
            $sql = "select * from repartidores where email = '$email' and password = '$password'";
            $data = $this->select($sql);
            if (!$data) {
                $sql = "select * from administrador where email = '$email' and password = '$password'";
                $data = $this->select($sql);
                return $data;
            } else {
                return $data;
            }
            return $data;
        }
    }
}
