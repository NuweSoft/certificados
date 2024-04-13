<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\DashboardModel;

class Dashboard extends Controller
{

    private $model;
    public function __construct()
    {
        parent::__construct();
        $this->model = new DashboardModel();
    }

    public function index()
    {
        if ($this->method !== 'GET') {
            return;
        }
        $view = new View();
        echo $view->render('dashboard', 'index');
    }
    public function cursoId(){
        if ($this->method !== 'GET') {
            return;
        }
        $view = new View();
        echo $view->render('cursoid', 'index');
    }
    public function listarCursosNuevos()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        try {
            $this->response($this->model->listarCursosNuevos());
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function listarCursos()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        try {
            $this->response($this->model->listarCursos());
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
}
