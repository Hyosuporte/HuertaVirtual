<?php
class repartidorDAO extends Query
{
    private $email, $nombre, $password, $idVehiculo, $marca, $tipoVehiculo, $modelo, $placa;

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

    public function getRepartidores()
    {
        $sql = "select * from repartidores";
        $data = $this->selectAll($sql);
        return $data;
    }

    public function registrarRepartidor(
        string $email,
        string $password,
        string $nombre,
        string $idVehiculo,
        string $marca,
        string $tipoVehiculo,
        string $modelo,
        string $placa
    ) {
        /* Datos Repartidor */
        $this->email = $email;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->idVehiculo = $idVehiculo;

        /* Datos Vehiculo */
        $this->marca = $marca;
        $this->tipoVehiculo = $tipoVehiculo;
        $this->modelo = $modelo;
        $this->placa = $placa;

        /* Se validad que no exista ni el vehiculo ni el repartidor */
        $buscarVehiculo = "select * from vehiculos where id = '$this->idVehiculo'";
        $exitsVehiculo = $this->select($buscarVehiculo);

        $buscarRepar = "select * from vehiculos where id = '$this->idVehiculo'";
        $exitsRepar = $this->select($buscarRepar);

        if (empty($exitsVehiculo)) {
            if (empty($exitsRepar)) {

                /* Insercion Vehiculo */
                $sql = "insert into vehiculos(id, marca,modelo,placa,tipo) values (?,?,?,?,?)";
                $datos = array(
                    $this->idVehiculo, $this->marca, $this->modelo, $this->placa, $this->tipoVehiculo

                );
                $res = $this->save($sql, $datos);

                if ($res == 1) {
                    /* Insercion Repartidor */
                    $sql = "insert into repartidores(nombre,email,vehiculo_id,password,estado) values (?,?,?,?,?)";
                    $data = array(
                        $this->nombre, $this->email, $this->idVehiculo, $this->password, "1"
                    );
                    $res = $this->save($sql, $data);
                    if ($res == 1) {
                        return "correcto";
                    } else {
                        return "error";
                    }
                } else {
                    return "error";
                }
            }else{
                return "Ya existe el repartidor";
            }
        } else {
            return "Ya existe el vehiculo";
        }
    }
}
