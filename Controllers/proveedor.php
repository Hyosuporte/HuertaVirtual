<?php
class proveedor extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function listar()
    {
        $data = $this->model->getProveedores();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['acciones'] = '<div>
                    <button class="btn btn-primary btn-circle .btn-sm" type="button" onclick="btnEditarPro(' . $data[$i]['id'] . ');" ><i class="fas fa-pen-fancy"></i></button>
                    <button class="btn btn-danger btn-circle .btn-sm" type="button" onclick="btnEliminarPro(' . $data[$i]['id'] . ');" ><i class="fas fa-times"></i></button>
                </div>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $semilla = $_POST['semilla'];
        $cantidad = $_POST['cantidad'];
        $id = $_POST['id'];
        if (empty($email) || empty($nombre) || empty($semilla) || empty($cantidad)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            if ($id == "") {
                $data = $this->model->registrarProveedor($email, $nombre, $semilla, $cantidad);
                if ($data == "correcto") {
                    $msg = "Registrado";
                } else {
                    $msg = $data;
                }
            } else {
                $data = $this->model->modificarProveedor($email, $nombre, $semilla, $cantidad, $id);
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
        $data = $this->model->consultarProveedor($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminar(int $id)
    {
        $data = $this->model->eliminarPro($id);
        if ($data == 1) {
            $msg = "eliminar";
        } else {
            $msg = "Error al eliminar el proveedor";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
