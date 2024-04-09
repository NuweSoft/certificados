<?php

namespace App\Controllers;

use stdClass;
use Exception;
use App\Config\View;
use App\Config\Response;
use App\Config\Seguridad;
use App\Config\Controller;
use App\Models\CursoModel;

class Curso extends Controller
{

    private $model;
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        parent::__construct();

        $this->model = new CursoModel();
    }

    public function index()
    {
        if ($this->method !== 'GET') {
            return;
        }

        $view = new View();
        session_regenerate_id(true);
        if (!empty($_SESSION['activo'])) {
            echo $view->render('curso', 'index');
        } else {
            echo $view->render('auth', 'index');
        }
    }
    public function listarCursos()
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->response($this->model->listarCursos());
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    public function registrarCurso()
    {
        if ($this->method !== 'POST') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->data['categoria_id'] = $_POST['categoria_id'];
            $this->data['nombre'] = $_POST['nombre'];
            $this->data['descripcion'] = $_POST['descripcion'];
            $this->data['fecha_ini'] = $_POST['fecha_ini'];
            $this->data['fecha_fin'] = $_POST['fecha_fin'];
            $this->data['instructor_id'] = $_POST['instructor_id'];
            $this->data['id_curso'] = $_POST['id_curso'];
            $img = isset($_FILES['foto']) ? $_FILES['foto'] : null;

            $img_anterior = isset($_POST['imagen_anterior']) ? $_POST['imagen_anterior'] : '';

            $requiredFields = ['categoria_id', 'nombre', 'descripcion', 'fecha_ini', 'fecha_fin'];
            foreach ($requiredFields as $field) {
                if (empty($this->data[$field])) {
                    $this->response(Response::estado400("El campo $field es requerido"));
                }
            }
            if (!empty($img['name'])) {
                $nombre_img = uniqid() . '.' . pathinfo($img['name'], PATHINFO_EXTENSION);
                $destino = 'public/assets/img/cursos/' . $nombre_img;
                move_uploaded_file($img['tmp_name'], $destino);
                if (!empty($img_anterior) && $img_anterior != "default.png" && file_exists('public/assets/img/cursos/' . $img_anterior)) {
                    unlink('public/assets/img/cursos/' . $img_anterior);
                }
            } else {
                $nombre_img = !empty($img_anterior) ? $img_anterior : "default.png";
            }

            $this->data['foto'] = $nombre_img;

            if (!empty($this->data['id_curso'])) {
              
                $this->model->eliminarCursoInstructor($this->data['id_curso']);
                $res = $this->model->modificarCurso($this->data);
                $instructores = explode(',', $this->data['instructor_id']);
                foreach ($instructores as $instructor) {
                    $data['curso_id'] = $this->data['id_curso'];
                    $data['instructor_id'] = $instructor;
                    $this->model->registrarCursoInstructor($data);
                }

            } else {
                $res =  $this->model->registrarCurso($this->data);
                if ($res == 'ok') {
                    $id_curso = $this->model->lastInsert();
                    $instructores = explode(',', $this->data['instructor_id']);
                    foreach ($instructores as $instructor) {
                        $data['curso_id'] = $id_curso['curso_id'];
                        $data['instructor_id'] = $instructor;
                        $this->model->registrarCursoInstructor($data);
                    }
                }
            }
            switch ($res) {
                case "ok":
                    $this->response(Response::estado201(['Curso registrado correctamente.']));
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
    public function eliminarCurso(int $id){
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $curso = $this->model->eliminarCurso($id);
            $this->response(Response::estado200($curso));
        } catch (Exception $e) {
            $this->response(Response::estado500([$e->getMessage()]));
        }
    }
    public function obtenerCurso(int $id)
    {
        if ($this->method !== 'GET') {
            http_response_code(404);
            $this->response(Response::estado404());
            return;
        }
        Seguridad::validateToken($this->header, Seguridad::secretKey());
        try {
            $this->response($this->model->obtenerCurso($id));
        } catch (Exception $e) {
            $this->response(Response::estado500($e->getMessage()));
        }
    }
    
}
