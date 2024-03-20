<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;

class RolModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public  function listarRoles()
    {
        $sql = "CALL listar_roles";
        try {
            $data = $this->selectAll($sql);
            return $data;
        } catch (Exception $e) {
            return Response::estado500();
        }
    }
    public function registrarRol($rol)
    {
        try {
            $existe = $this->select("SELECT COUNT(*) as total FROM rol WHERE estado = 1 AND nombre = :nombre", ['nombre' => $rol]);
            if ($existe['total'] > 0) {
                return "existe";
            }
            $sql = "CALL registrar_rol(:nombre)";
            $params = [
                'nombre' => $rol,
            ];
            $result = $this->save($sql, $params);

            if ($result == 1) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "error";
        }
    }
    public  function obtenerRol(int $id)
    {
        $sql = "CALL obtener_rol(:id_rol)";
        $params = [
            'id_rol' => $id,
        ];
        try {
            $data = $this->select($sql, $params);
            return $data;
        } catch (Exception $e) {
            return Response::estado500();
        }
    }
    public function actualizarRol(array $rol)
    {
        $existe = $this->select("SELECT COUNT(*) as total FROM rol WHERE nombre = :nombre AND id_rol <> :id_rol AND estado = 1", [
            'nombre' => $rol['nombre'],
            'id_rol' => $rol['id_rol']
        ]);

        if ($existe['total'] > 0) {
            return "existe";
        }
        try {
            $sql = "CALL editar_rol(:nombre,:id_rol)";
            $params = [
                'nombre' => $rol['nombre'],
                'id_rol' => $rol['id_rol'],

            ];
            $result = $this->save($sql, $params);
            if ($result == 1) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "error";
        }
    }
    public function eliminarRol($rol)
    {
        try {
            $sql = "CALL eliminar_rol(:id_rol)";
            $params = [
                'id_rol' => $rol,
            ];
            $result = $this->save($sql, $params);

            if ($result == 1) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "error";
        }
    }
}
