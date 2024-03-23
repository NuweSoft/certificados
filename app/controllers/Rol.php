<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\RolModel;

class Rol extends Controller
{

    private $model;
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        parent::__construct();

        $this->model = new RolModel();
    }

    public function index()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        $view = new View();
        session_regenerate_id(true);
        if (!empty($_SESSION['activo'])) {
            echo $view->render('rol', 'index');
        } else {
            echo $view->render('auth', 'index');
        }
    }
    public function listarRoles()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $roles = $this->model->listarRoles();
            $this->response(Response::estado200($roles));
        } catch (Exception $e) {
            $this->response(Response::estado500([$e->getMessage()]));
        }
    }
    public function registrarRol()
    {
        if ($this->method !== 'POST') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());

        if ($this->data === null) {
            $this->response(Response::estado400(['Datos JSON no válidos.']));
            return;
        }

        if (!isset($this->data['nombre']) || empty($this->data['nombre'])) {
            $this->response(Response::estado400(['El nombre del rol es obligatorio.']));
            return;
        }
        $this->data['nombre'] = ucfirst($this->data['nombre']);
        $rol = !empty($this->data['id_rol'])
        ? $this->model->actualizarRol($this->data)
        : $this->model->registrarRol($this->data['nombre']);

       /*  if ($this->data['id_rol'] === null || $this->data['id_rol'] === "") {
            $rol = $this->model->registrarRol($this->data['nombre']);
        } else {
            $rol = $this->model->actualizarRol($this->data);
        } */
        switch ($rol) {
            case "ok":
                $this->response(Response::estado201(['Rol registrado correctamente.']));
                break;
            case "existe":
                $this->response(Response::estado409());
                break;
            case "error":
                $this->response(Response::estado500());
                break;
            default:
                $this->response(Response::estado500(['Respuesta del servidor desconocida.']));
                break;
        }
    }
    public function obtenerRol(int $id)
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $rol = $this->model->obtenerRol($id);
            $this->response(Response::estado200($rol));
        } catch (Exception $e) {
            $this->response(Response::estado500([$e->getMessage()]));
        }
    }
    public function eliminarRol(int $id){
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $rol = $this->model->eliminarRol($id);
            $this->response(Response::estado200($rol));
        } catch (Exception $e) {
            $this->response(Response::estado500([$e->getMessage()]));
        }
    
    }
}
