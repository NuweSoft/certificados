<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;

class DashboardModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function listarCursosNuevos()
    {
        $sql = "CALL listar_cursos_nuevos()";
        try {
            $data = $this->selectAll($sql);
            return $data;
        } catch (Exception $e) {
            return Response::estado500($e);
        }
    }
    public function listarCursos()
    {
        $sql = "CALL listar_cursos()";
        try {
            $data = $this->selectAll($sql);
            return $data;
        } catch (Exception $e) {
            return Response::estado500($e);
        }
    }
}