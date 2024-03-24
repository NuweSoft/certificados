<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\InstructorModel;

class Instructor extends Controller
{
    private $model;
    private static $validar_numero = '/^[0-9]+$/';

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        parent::__construct();

        $this->model = new InstructorModel();
    }

    public function index()
    {
        if ($this->method !== 'GET') {
            return;
        }

        $view = new View();
        session_regenerate_id(true);
        if (!empty($_SESSION['activo'])) {
            echo $view->render('instructor', 'index');
        } else {
            echo $view->render('auth', 'index');
        }
    }
    public function listarInstructores()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->response($this->model->listarInstructores());
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function registrarInstructor()
    {
        if ($this->method !== 'POST') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->data['ci'] = $_POST['ci'];
            $this->data['nombre'] = $_POST['nombre'];
            $this->data['apellido'] = $_POST['apellido'];
            $this->data['direccion'] = $_POST['direccion'];
            $this->data['telefono'] = $_POST['telefono'];
            $this->data['correo'] = $_POST['correo'];
            $this->data['id_instructor'] = $_POST['id_instructor'];
            $img = isset($_FILES['foto']) ? $_FILES['foto'] : null;

            $img_anterior = isset($_POST['imagen_anterior']) ? $_POST['imagen_anterior'] : '';

            $requiredFields = ['ci', 'nombre', 'apellido', 'direccion', 'telefono', 'correo'];
            foreach ($requiredFields as $field) {
                if (empty($this->data[$field])) {
                    $this->response(Response::estado400("El campo $field es requerido"));
                }
            }
            if (!preg_match(self::$validar_numero, $this->data['ci'])) {
                $this->response(Response::estado400('El campo ci solo puede contener números'));
            }

            if (!preg_match(self::$validar_numero, $this->data['telefono'])) {
                $this->response(Response::estado400('El campo telefono solo puede contener números'));
            }
            if (!filter_var($this->data['correo'], FILTER_VALIDATE_EMAIL)) {
                $this->response(Response::estado400('El campo correo no es válido'));
            }

            if (!empty($img['name'])) {
                $nombre_img = uniqid() . '.' . pathinfo($img['name'], PATHINFO_EXTENSION);
                $destino = 'public/assets/img/instructores/' . $nombre_img;
                move_uploaded_file($img['tmp_name'], $destino);
                if (!empty($img_anterior) && $img_anterior != "default.png" && file_exists('public/assets/img/instructores/' . $img_anterior)) {
                    unlink('public/assets/img/instructores/' . $img_anterior);
                }
            } else {
                $nombre_img = !empty($img_anterior) ? $img_anterior : "default.png";
            }

            $this->data['foto'] = $nombre_img;
            $res = !empty($this->data['id_instructor'])
                ? $this->model->modificarInstructor($this->data)
                : $this->model->registrarInstructor($this->data);
            switch ($res) {
                case "ok":
                    $this->response(Response::estado201(['Instrtuctor registrado correctamente.']));
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
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function obtenerInstructor(int $id)
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->response($this->model->obtenerInstructor($id));
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function eliminarInstructor(int $id)
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $rol = $this->model->eliminarInstructor($id);
            $this->response(Response::estado200($rol));
        } catch (Exception $e) {
            $this->response(Response::estado500([$e->getMessage()]));
        }
    }
}
