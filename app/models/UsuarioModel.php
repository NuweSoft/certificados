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
                    $payload = ['token' => $res["token"]];
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
            error_log("UsuarioModel::login() -> " . $e);
            return Response::estado500();
        }
    }
}
