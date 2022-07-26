<?php
class repartidor extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView("repartidor", "index");
    }

    public function valid()
    {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $msg = "Erro campos vacios";
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = $this->model->getRepartidor($email, $password);
        }
        if ($data) {
            $_SESSION['id_repartidor'] = $data['id'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['usuario'] = $data['email'];
            $msg = "correcto";
        } else {
            $msg = "Usuario o contraseña incorrecta";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listar()
    {
        $data = $this->model->getRepartidores();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-soft-succes">Activo</span>';
            } else {
                $data[$i]['estado'] = '<span class="badge bg-soft-danger">Inactivo</span>';
            }
            $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button">Editar</button>
                <button class="btn btn-danger" type="button">Eliminar</button>
            </div>';
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
        if (empty($email) || empty($nombre) || empty($password) || empty($marca) || empty($modelo) || empty($placa) || empty($idVehiculo)) {
            $msg = "Todos los campos son obligatorios";
        } else if ($password != $passwordConf) {
            $msg = "Las contraseñas deben ser iguales";
        } else {
            $data = $this->model->registrarRepartidor($email, $password, $nombre, $idVehiculo, $marca, $tipoVehiculo, $modelo, $placa);
            if ($data == "correcto") {
                $msg = "Registrado";
            } else {
                $msg = "No se puedo registrar al repartidor";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
