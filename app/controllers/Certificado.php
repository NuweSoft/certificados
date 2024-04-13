<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\CertificadoModel;

class Certificado extends Controller
{

    private $model;
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        parent::__construct();

        $this->model = new CertificadoModel();
    }

    public function index()
    {
        if ($this->method !== 'GET') {
            return;
        }

        $view = new View();
        session_regenerate_id(true);
        if (!empty($_SESSION['activo'])) {
            echo $view->render('certificado', 'index');
        } else {
            echo $view->render('auth', 'index');
        }
    }
}