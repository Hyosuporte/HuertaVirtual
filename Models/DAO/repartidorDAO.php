<?php
class repartidorDAO extends Query
{
    private $id, $email, $nombre, $password, $idVehiculo, $marca, $tipoVehiculo, $modelo, $placa;

    public function __construct()
    {
        parent::__construct();
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

        $buscarRepar = "select * from repartidores where email = '$this->email'";
        $exitsRepar = $this->select($buscarRepar);

        $buscarEmail = "select * from clientes where email = '$this->email'";
        $exitsEmail = $this->select($buscarEmail);

        if (empty($exitsVehiculo)) {
            if (empty($exitsRepar)) {
                if(empty($exitsEmail)){
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
                    return "Ya esta ocupado el usuario";
                }
            } else {
                return "Ya existe el repartidor";
            }
        } else {
            return "Ya existe el vehiculo";
        }
    }

    public function consultarRep(int $id)
    {
        $sql = "select * from repartidores r JOIN vehiculos v ON r.vehiculo_id = v.id WHERE r.id = $id";
        $data = $this->select($sql);
        return $data;
    }

    public function modificarRep(
        string $email,
        string $nombre,
        string $idVehiculo,
        string $marca,
        string $tipoVehiculo,
        string $modelo,
        string $placa,
        int $id
    ) {
        /* Datos Repartidor */
        $this->email = $email;
        $this->nombre = $nombre;
        $this->idVehiculo = $idVehiculo;

        /* Datos Vehiculo */
        $this->marca = $marca;
        $this->tipoVehiculo = $tipoVehiculo;
        $this->modelo = $modelo;
        $this->placa = $placa;

        /* Insercion Vehiculo */
        $sql = "update repartidores set nombre = ? , email = ? ,vehiculo_id = ? , estado = ? where id = ?";
        $data = array(
            $this->nombre, $this->email, $this->idVehiculo, "1", $id
        );
        $res = $this->save($sql, $data);

        if ($res == 1) {
            /* Insercion Repartidor */
            $sql = "update vehiculos set id = ?, marca = ? ,modelo = ? ,placa = ? ,tipo = ? where id = ?";
            $datos = array(
                $this->idVehiculo, $this->marca, $this->modelo, $this->placa, $this->tipoVehiculo, $this->idVehiculo

            );
            $res = $this->save($sql, $datos);
            if ($res == 1) {
                return "Modificado";
            } else {
                return "error al modificado el repartidor";
            }
        } else {
            return "error";
        }
    }

    public function inhabilitarRep(int $id)
    {
        $this->id = $id;
        $sql = "update repartidores set estado = 0 where id = ?";
        $datos = array($this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }

    public function habilitarRep(int $id)
    {
        $this->id = $id;
        $sql = "update repartidores set estado = 1 where id = ?";
        $datos = array($this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }
}
