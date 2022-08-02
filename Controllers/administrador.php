<?php
class administrador extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        if ($_SESSION['rol'] == "1") {
            $this->views->getView("administrador", "index");
        } else {
            header("location: " . BASE_URL);
        }
    }

    public function proveedores()
    {
        if ($_SESSION['rol'] == "1") {
            $this->views->getView("administrador", "proveedores");
        } else {
            header("location: " . BASE_URL);
        }
    }

    public function plantas()
    {
        if ($_SESSION['rol'] == "1") {
            $this->views->getView("administrador", "plantas");
        } else {
            header("location: " . BASE_URL);
        }
    }

}
