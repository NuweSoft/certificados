<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;
use App\Config\Seguridad;

class UsuarioModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login(array $usuario)
    {
        $data_ = ['correo', 'contra'];

        foreach ($data_ as $field) {
            if (!array_key_exists($field, $usuario)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        $sql = "CALL login(:correo)";
        $params = [
            ':correo' => $usuario['correo'],
        ];
        $password = $usuario['contra'];
        try {
            $res = $this->select($sql, $params);

            if ($res == null) {
                return Response::estado400('Usuario o contraseña incorrecta');
            } else {
                if (Seguridad::validatePassword($password, $res['contra'])) {
                    $payload = [
                        'token' => ["ci: {$res['ci']}", "Nombre: {$res['nombre']}", "Apellido: {$res['apellido']}", "Rol: {$res['rol']}", "Correo: {$res['correo']}"]
                    ];
                    $token = Seguridad::createToken(Seguridad::secretKey(), $payload);

                    $data = [
                        'id_usuario' => $res['id_usuario'],
                        'ci' => $res['ci'],
                        'nombre' => $res['nombre'],
                        'apellido' => $res['apellido'],
                        'correo' => $res['correo'],
                        'rol' => $res['rol'],
                        'token' => $token,
                        'foto' => $res['foto'],
                        'estado' => $res['estado']
                    ];
                    return Response::estado200($data);
                } else {
                    return Response::estado400('Usuario o contraseña incorrecta');
                }
            }
        } catch (Exception $e) {
            return Response::estado500();
        }
    }
    public function listarUsuarios()
    {
        $sql = "CALL listar_usuarios()";
        try {
            $res = $this->selectAll($sql);
            return $res;
        } catch (Exception $e) {
            return Response::estado500();
        }
    }
    public function registrarUsuario(array $usuario)
    {

        $data = ['ci', 'nombre', 'apellido', 'direccion', 'telefono', 'correo', 'contra', 'rol_id'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $usuario)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        if ($usuario['foto'] == null || $usuario['foto'] == '') {
            $usuario['foto'] = 'default.jpg';
        }

        $existe = $this->select("SELECT COUNT(*) as total FROM usuario WHERE estado = 1 AND ci = :ci AND correo = :correo", ['ci' => $usuario['ci'], 'correo' => $usuario['correo']]);
        if ($existe['total'] > 0) {
            return "existe";
        }
        $sql = "CALL registrar_usuario(:ci,:nombre,:apellido,:direccion,:telefono,:correo,:contra,:rol_id,:foto)";
        $params = [
            ':ci' => $usuario['ci'],
            ':nombre' => $usuario['nombre'],
            ':apellido' => $usuario['apellido'],
            ':direccion' => $usuario['direccion'],
            ':telefono' => $usuario['telefono'],
            ':correo' => $usuario['correo'],
            ':contra' => Seguridad::createPassword($usuario['contra']),
            ':rol_id' => $usuario['rol_id'],
            ':foto' => $usuario['foto'],
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function modificarUsuario(array $usuario)
    {
        $data = ['ci', 'nombre', 'apellido', 'direccion', 'telefono', 'rol_id', 'id_usuario'];
        foreach ($data as $field) {
            if (!array_key_exists($field, $usuario)) {
                return Response::estado400('El campo ' . $field . ' es requerido');
            }
        }
        if ($usuario['foto'] == null || $usuario['foto'] == '') {
            $usuario['foto'] = 'default.jpg';
        }
        $existe = $this->select("SELECT COUNT(*) AS total FROM usuario WHERE ci = :ci AND nombre=:nombre AND apellido=:apellido AND direccion=:direccion AND telefono=:telefono AND rol_id=:rol_id AND foto=:foto ", ['ci' => $usuario['ci'], 'nombre' => $usuario['nombre'], 'apellido' => $usuario['apellido'], 'direccion' => $usuario['direccion'], 'telefono' => $usuario['telefono'], 'rol_id' => $usuario['rol_id'], 'foto' => $usuario['foto']]);
        if ($existe['total'] > 0) {
            return "existe";
        }
        $sql = "CALL editar_usuario(:ci,:nombre,:apellido,:direccion,:telefono,:rol_id,:foto,:id_usuario)";
        $params = [
            ':ci' => $usuario['ci'],
            ':nombre' => $usuario['nombre'],
            ':apellido' => $usuario['apellido'],
            ':direccion' => $usuario['direccion'],
            ':telefono' => $usuario['telefono'],
            ':rol_id' => $usuario['rol_id'],
            ':foto' => $usuario['foto'],
            ':id_usuario' => $usuario['id_usuario']
        ];
        $result = $this->save($sql, $params);
        if ($result == 1) {
            return "ok";
        } else {
            return  "error";
        }
    }
    public function listarUsuarioId(int $id)
    {
        $sql = "CALL listar_usuario_id(:id)";
        $params = [':id' => $id];
        $res = $this->select($sql, $params);
        return $res;
    }
    public function eliminarUsuario(int $id){
        $sql = "CALL eliminar_usuario(:id)";
        $params = [':id' => $id];
        $res = $this->save($sql, $params);
        if($res == 1){
            return "ok";
        }else{
            return "error";
        }
    }
}
