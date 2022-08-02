<?php
class administrador extends Controller
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['rol'])) {
            header("location: " . BASE_URL);
        }
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
}
