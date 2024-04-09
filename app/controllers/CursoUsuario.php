<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;


class CursoUsuario extends Controller
{

    private $model;
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->method !== 'GET') {
            return;
        }

        $view = new View();
        echo $view->render('curso_usuario', 'index');
    }
}
