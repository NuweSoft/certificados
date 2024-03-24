<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;

class CategoriaModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function listarCategorias()
    {
        $sql = "CALL listar_categorias()";
        try {
            $data = $this->selectAll($sql);
            return $data;
        } catch (Exception $e) {
            return Response::estado500($e);
        }
    }
    public function registrarCategoria($categoria)
    {
        try {
            $existe = $this->select("SELECT COUNT(*) as total FROM categoria WHERE estado = 1 AND nombre = :nombre", ['nombre' => $categoria]);
            if ($existe['total'] > 0) {
                return "existe";
            }
            $sql = "CALL registrar_categoria(:nombre)";
            $params = [
                'nombre' => $categoria,
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
    public  function obtenerCategoria(int $id)
    {
        $sql = "CALL obtener_categoria(:id_categoria)";
        $params = [
            'id_categoria' => $id,
        ];
        try {
            $data = $this->select($sql, $params);
            return $data;
        } catch (Exception $e) {
            return Response::estado500();
        }
    }
    public function actualizarCategoria(array $categoria)
    {
        $existe = $this->select("SELECT COUNT(*) as total FROM categoria WHERE nombre = :nombre AND id_categoria <> :id_categoria AND estado = 1", [
            'nombre' => $categoria['nombre'],
            'id_categoria' => $categoria['id_categoria']
        ]);

        if ($existe['total'] > 0) {
            return "existe";
        }
        try {
            $sql = "CALL editar_categoria(:nombre,:id_categoria)";
            $params = [
                'nombre' => $categoria['nombre'],
                'id_categoria' => $categoria['id_categoria'],

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
    public function eliminarCategoria($categoria)
    {
        try {
            $sql = "CALL eliminar_categoria(:id_categoria)";
            $params = [
                'id_categoria' => $categoria,
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