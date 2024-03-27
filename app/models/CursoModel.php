<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;

class CursoModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registrarCurso(array $curso){
        $data = ['categoria_id', 'nombre', 'descripcion', 'fecha_ini', 'fecha_fin'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $curso)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        if ($curso['foto'] == null || $curso['foto'] == '') {
            $curso['foto'] = 'default.jpg';
        }

        $sql = "CALL registrar_curso(:categoria_id,:nombre,:descripcion,:fecha_ini,:fecha_fin,:foto)";
        $params = [
            'categoria_id' => $curso['categoria_id'],
            'nombre' => $curso['nombre'],
            'descripcion' => $curso['descripcion'],
            'fecha_ini' => $curso['fecha_ini'],
            'fecha_fin' => $curso['fecha_fin'],
            'foto' => $curso['foto']
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function listarCursos()
    {
        $sql = "CALL listar_cursos";
        try {
            $data = $this->selectAll($sql);
            return $data;
        } catch (Exception $e) {
            return Response::estado500($e);
        }
    }
    public function registrarCursoInstructor(array $curso){
        $data = ['instructor_id', 'curso_id'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $curso)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }

        $sql = "CALL registrar_curso_instructor(:curso_id,:instructor_id)";
        $params = [
            'curso_id' => $curso['curso_id'],
            'instructor_id' => $curso['instructor_id'],
       
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function modificarCurso(array $curso){
        $data = ['categoria_id', 'nombre', 'descripcion', 'fecha_ini', 'fecha_fin','id_curso'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $curso)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        if ($curso['foto'] == null || $curso['foto'] == '') {
            $curso['foto'] = 'default.jpg';
        }

        $sql = "CALL editar_curso(:categoria_id,:nombre,:descripcion,:fecha_ini,:fecha_fin,:foto,:id_curso)";
        $params = [
            'categoria_id' => $curso['categoria_id'],
            'nombre' => $curso['nombre'],
            'descripcion' => $curso['descripcion'],
            'fecha_ini' => $curso['fecha_ini'],
            'fecha_fin' => $curso['fecha_fin'],
            'foto' => $curso['foto'],
            'id_curso' => $curso['id_curso']
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function lastInsert(){
        $sql = "SELECT LAST_INSERT_ID() AS curso_id FROM curso";
        $data = $this->select($sql);
        return $data;
    
    }
    public function eliminarCurso(int $id){
       
        $sql = "CALL eliminar_curso(:id_curso)";
        $params = [
            'id_curso' => $id,
       
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function eliminarCursoInstructor(int $id){
       
        $sql = "CALL elimar_curso_instructor(:curso_id)";
        $params = [
            'curso_id' => $id,
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function obtenerCurso(int $id)
    {
        $sql = "CALL obtener_curso(:id_curso)";
        $params = [
            'id_curso' => $id
        ];
        try {
            $data = $this->selectAll($sql, $params);
            return $data;
        } catch (Exception $e) {
            return Response::estado500($e);
        }
    }
}