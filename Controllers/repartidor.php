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

    public function valid(){
        if(empty($_POST['email']) || empty($_POST['password'])){
            $msg = "Erro campos vacios";
        }else{
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = $this->model->getRepartidor($email, $password);
        }
        if($data){
            $_SESSION['id_repartidor'] = $data['id'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['usuario'] = $data['email'];
            $msg = "correcto";
        }else{
            $msg = "Usuario o contraseña incorrecta";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function listar(){
        $data= $this->model->getRepartidores();
        for($i=0; $i<count($data); $i++){
            $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button">Editar</button>
                <button class="btn btn-danger" type="button">Eliminar</button>
            </div>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

}
