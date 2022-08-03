<?php
class planta extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function listar()
    {
        $data = $this->model->getPlantas();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['acciones'] = '<div>
                    <button class="btn btn-primary btn-circle .btn-sm" type="button" onclick="btnEditarPlan(' . $data[$i]['id'] . ');" ><i class="fas fa-pen-fancy"></i></button>
                    <button class="btn btn-danger btn-circle .btn-sm" type="button" onclick="btnEliminarPlan(' . $data[$i]['id'] . ');" ><i class="fas fa-times"></i></button>
                </div>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        $nombre = $_POST['nombre'];
        $siembra = $_POST['siembra'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $id = $_POST['id'];
        if (empty($nombre) || empty($siembra) || empty($cantidad) || empty($precio) || empty($categoria)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            if ($id == "") {
                $data = $this->model->registrarPlanta($nombre, $siembra, $cantidad, $precio, $categoria);
                if ($data == "correcto") {
                    $msg = "Registrado";
                } else {
                    $msg = $data;
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
