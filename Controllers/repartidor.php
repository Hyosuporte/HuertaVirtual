<?php
class repartidor extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView("repartidor", "index");
    }

    public function listar()
    {
        $data = $this->model->getRepartidores();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-soft-success text-success text-uppercase">Activo</span>';
                $data[$i]['acciones'] = '<div>
                    <button class="btn btn-primary btn-circle .btn-sm" type="button" onclick="btnEditar(' . $data[$i]['id'] . ');" ><i class="fas fa-pen-fancy"></i></button>
                    <button class="btn btn-danger btn-circle .btn-sm" type="button" onclick="btnInhabilitar(' . $data[$i]['id'] . ');" ><i class="fas fa-times"></i></button>
                </div>';
            } else {
                $data[$i]['estado'] = '<span class="badge bg-soft-danger text-danger text-uppercase">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                    <button class="btn btn-primary btn-circle .btn-sm" type="button" onclick="btnEditar(' . $data[$i]['id'] . ');" ><i class="fas fa-pen-fancy"></i></button>
                    <button class="btn btn-success btn-circle .btn-sm" type="button" onclick="btnHabilitar(' . $data[$i]['id'] . ');" ><i class="fas fa-check"></i></button>
                </div>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $idVehiculo = $_POST['idVehiculo'];
        $marca = $_POST['marca'];
        $tipoVehiculo = $_POST['vehiculo'];
        $modelo = $_POST['modelo'];
        $placa = $_POST['placa'];
        $id = $_POST['id'];
        if (empty($email) || empty($nombre) || empty($marca) || empty($modelo) || empty($placa) || empty($idVehiculo)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            if ($id == "") {
                if ($password != $passwordConf) {
                    $msg = "Las contraseñas deben ser iguales";
                } else {
                    $data = $this->model->registrarRepartidor($email, $password, $nombre, $idVehiculo, $marca, $tipoVehiculo, $modelo, $placa);
                    if ($data == "correcto") {
                        $msg = "Registrado";
                    } else {
                        $msg = $data;
                    }
                }
            } else {
                $data = $this->model->modificar($email, $nombre, $idVehiculo, $marca, $tipoVehiculo, $modelo, $placa, $id);
                if ($data == "Modificado") {
                    $msg = "Modificado";
                } else {
                    $msg = $data;
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar(int $id)
    {
        $data = $this->model->consultar($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function inhabilitar(int $id)
    {
        $data = $this->model->inhabilitar($id);
        if ($data == 1) {
            $msg = "inhabilitado";
        } else {
            $msg = "Error al inhabilitado el repartidor";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function habilitar(int $id)
    {
        $data = $this->model->habilitar($id);
        if ($data == 1) {
            $msg = "habilitado";
        } else {
            $msg = "Error al habilitado el repartidor";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
