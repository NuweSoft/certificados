<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;

class InstructorModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function listarInstructores()
    {
        $sql = "CALL listar_instructores()";
        try {
            $res = $this->selectAll($sql);
            return $res;
        } catch (Exception $e) {
            return Response::estado500($e->getMessage());
        }
    }
    public function registrarInstructor(array $instructor)
    {

        $data = ['ci', 'nombre', 'apellido', 'direccion', 'telefono', 'correo'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $instructor)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        if ($instructor['foto'] == null || $instructor['foto'] == '') {
            $instructor['foto'] = 'default.jpg';
        }

        $existe = $this->select("SELECT COUNT(*) as total FROM instructor WHERE estado = 1 AND ci = :ci AND correo = :correo", ['ci' => $instructor['ci'], 'correo' => $instructor['correo']]);
        if ($existe['total'] > 0) {
            return "existe";
        }
        $sql = "CALL registrar_instructor(:ci,:nombre,:apellido,:direccion,:telefono,:correo,:foto)";
        $params = [
            ':ci' => $instructor['ci'],
            ':nombre' => $instructor['nombre'],
            ':apellido' => $instructor['apellido'],
            ':direccion' => $instructor['direccion'],
            ':telefono' => $instructor['telefono'],
            ':correo' => $instructor['correo'],
            ':foto' => $instructor['foto'],
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function modificarInstructor(array $instructor)
    {
        $data = ['ci', 'nombre', 'apellido', 'direccion', 'telefono','correo','id_instructor'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $instructor)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        if ($instructor['foto'] == null || $instructor['foto'] == '') {
            $instructor['foto'] = 'default.jpg';
        }
        $existe = $this->select("SELECT COUNT(*) AS total FROM instructor WHERE ci = :ci AND nombre=:nombre AND apellido=:apellido AND direccion=:direccion AND telefono=:telefono AND correo=:correo AND foto=:foto ", ['ci' => $instructor['ci'], 'nombre' => $instructor['nombre'], 'apellido' => $instructor['apellido'], 'direccion' => $instructor['direccion'], 'telefono' => $instructor['telefono'], 'correo' => $instructor['correo'], 'foto' => $instructor['foto']]);
        if ($existe['total'] > 0) {
            return "existe";
        }
        $sql = "CALL editar_instructor(:ci,:nombre,:apellido,:direccion,:telefono,:correo,:foto,:id_instructor)";
        $params = [
            ':ci' => $instructor['ci'],
            ':nombre' => $instructor['nombre'],
            ':apellido' => $instructor['apellido'],
            ':direccion' => $instructor['direccion'],
            ':telefono' => $instructor['telefono'],
            ':correo' => $instructor['correo'],
            ':foto' => $instructor['foto'],
            ':id_instructor' => $instructor['id_instructor']
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function obtenerInstructor(int $id)
    {
        $sql = "CALL obtener_instructor(:id_instructor)";
        $params = [':id_instructor' => $id];
        $res = $this->select($sql, $params);
        return $res;
    }
    public function eliminarInstructor(int $id){
        $sql = "CALL eliminar_instructor(:id_instructor)";
        $params = [':id_instructor' => $id];
        $res = $this->save($sql, $params);
        if($res == 1){
            return "ok";
        }else{
            return "error";
        }
    }
}