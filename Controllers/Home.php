<?php
class Home extends Controller
{
    public function __construct()
    {
        session_start();
        if (!empty($_SESSION['rol'])) {
            if ($_SESSION['rol'] == "1") {
                header("location: " . BASE_URL . "administrador");
            } else if ($_SESSION['rol'] == "2") {
                header("location: " . BASE_URL . "repartidor");
            } else {
                header("location: " . BASE_URL . "cliente");
            }
        }
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView('home', "index");
    }
}
