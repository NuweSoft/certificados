<?php

namespace App\Controllers;

use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\UsuarioModel;

class Usuario extends Controller
{

    private $model;
    private static $validar_numero = '/^[0-9]+$/';
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
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        $view = new View();
        session_regenerate_id(true);
        if (!empty($_SESSION['activo'])) {
            echo $view->render('usuario', 'index');
        } else {
            echo $view->render('auth', 'index');
        }
    }
    public function listarUsuarios()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->response($this->model->listarUsuarios());
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function registrarUsuario()
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
            $this->data['rol_id'] = $_POST['rol_id'];
            $this->data['correo'] = $_POST['correo'];
            $this->data['contra'] = $_POST['contra'];
            $this->data['id_usuario'] = $_POST['id_usuario'];
            $img = $_FILES['foto'];

            $requiredFields = ['ci', 'nombre', 'apellido', 'direccion', 'telefono', 'rol_id'];
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
            if (!empty($img['name'])) {
                $nombre_img = 'perfil_usuario_' . $this->data['ci'] . '.' . pathinfo($img['name'], PATHINFO_EXTENSION);
                $destino = 'public/assets/img/usuarios/' . $nombre_img;
                move_uploaded_file($img['tmp_name'], $destino);
                if (!empty($img_anterior) && $img_anterior != "default.png" && file_exists('public/assets/img/usuarios/' . $img_anterior)) {
                    unlink('public/assets/img/usuarios/' . $img_anterior);
                }
            } else {
                $nombre_img = !empty($img_anterior) ? $img_anterior : "default.png";
            }

            $this->data['foto'] = $nombre_img;

            $res = !empty($this->data['id_usuario'])
                ? $this->model->modificarUsuario($this->data)
                : $this->model->registrarUsuario($this->data);
            switch ($res) {
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
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function listarUsuarioId(int $id)
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->response($this->model->listarUsuarioId($id));
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function eliminarUsuario(int $id){
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $rol = $this->model->eliminarUsuario($id);
            $this->response(Response::estado200($rol));
        } catch (Exception $e) {
            $this->response(Response::estado500([$e->getMessage()]));
        }
    }
}
