<?php
class usuario extends Controller
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['rol'])) {
            header("location: " . BASE_URL);
        }
        parent::__construct();
    }

    public function validar()
    {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $msg = "Erro campos vacios";
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = $this->model->getUsuario($email, $password);
        }
        if ($data) {
            $_SESSION['id'] = $data['id'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['usuario'] = $data['email'];
            $_SESSION['rol'] = $data['rol'];
            if ($data['rol'] == 1) {
                $msg = "admin";
            } else if ($data['rol'] == 2) {
                $msg = "emple";
            }else{
                $msg = "client";
            }
        } else {
            $msg = "Usuario o contraseña incorrecta";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function salir()
    {
        session_destroy();
        header("location: " . BASE_URL);
    }
}
