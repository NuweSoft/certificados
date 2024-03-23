<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\UsuarioModel;

class login extends Controller
{

    private $model;
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        parent::__construct();

        $this->model = new UsuarioModel();
    }

    public function index()
    {
        if ($this->method === 'GET') {
            try {
                $view = new View();
                session_regenerate_id(true);
                if (!empty($_SESSION['activo'])) {
                    echo $view->render('home', 'index');
                } else {
                    echo $view->render('auth', 'index');
                }
            } catch (Exception $e) {
                $this->response(Response::estado404($e));
            }
        } else {
            $this->response(Response::estado405());
        }
    }
    public function login()
    {


        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400);
            echo json_encode(Response::estado400('Error al decodificar JSON: ' . json_last_error_msg()));
            return;
        }
        $datos = ['correo', 'contra'];
        $data = $this->data;
        foreach ($datos as $field) {
            if (empty($data[$field])) {
                http_response_code(400);
                echo json_encode(Response::estado400('El campo ' . $field . ' es requerido'));
                return;
            }
        }
        if (!filter_var($data['correo'], FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            $this->response(Response::estado400('El correo electrónico no es válido'));
            return;
        }
        try {
            $res = $this->model->login($data);

            if ($res['estado'] === 'ok') {
                $_SESSION['id_usuario'] = $res['data']['id_usuario'];
                $_SESSION['ci'] = $res['data']['ci'];
                $_SESSION['nombre'] = $res['data']['nombre'];
                $_SESSION['apellido'] = $res['data']['apellido'];
                $_SESSION['correo'] = $res['data']['correo'];
                $_SESSION['token'] = $res['data']['token'];
                $_SESSION['rol'] = $res['data']['rol'];
                $_SESSION['foto'] = $res['data']['foto'];
                $_SESSION['estado'] = $res['data']['estado'];

                if ($res['data']['estado'] === 0) {
                    $_SESSION['activo'] = false;
                } else {
                    $_SESSION['activo'] = true;
                }
            }
            $this->response($res);
        } catch (Exception $e) {
            http_response_code(500);
            $this->response(Response::estado500('Error interno en el servidor ' . $e));
        }
    }

    public function logout(){
        if ($this->method !== 'GET') {
            http_response_code(405);
            $this->response(Response::estado405());
            return;
        }
        session_destroy();
        header('Location:'.BASE_URL);
    
    }
}
