<?php
class proveedor extends Controller{

    public function index()
    {
        print_r($this->model->getCliente());
    }

}