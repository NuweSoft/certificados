<?php

namespace App\Config;

class Response
{
    public static function json($msg, $estado, $code)
    {
        http_response_code($code);
        $response = [
            'data' => $msg,
            'estado' => $estado,
            'codigo' => $code,
        ];

        return($response);
    }

    public static function estado200($res)
    {
        return self::json($res, 'ok', 200);
    }

    public static function estado201($res = 'Recurso creado correctamente.')
    {
        return self::json($res, 'ok', 201);
    }

    public static function estado400($res = 'Error en la petición o datos incorrectos. Verifique los datos ingresados.')
    {
        return self::json($res, 'error', 400);
    }

    public static function estado401($res = 'No tiene privilegios para acceder al recurso solicitado.')
    {
        return self::json($res, 'error', 401);
    }

    public static function estado403($res = 'No tiene permisos para realizar esta acción. Verifique su token de acceso.')
    {
        return self::json($res, 'error', 403);
    }

    public static function estado404($res = 'No se encontró el recurso solicitado. Verifique la ruta o el método de la petición.')
    {
        return self::json($res, 'error', 404);
    }
    public static function estado405($res = 'Método no permitidoo. Verifique el método de la petición.')
    {
        return self::json($res, 'error', 405);
    }
    public static function estado409($res = 'Conflicto. El recurso ya existe.')
    {
        return self::json($res, 'error', 409);
    }
    public static function estado500($res = 'Error en el servidor.')
    {
        return self::json($res, 'error', 500);
    }
}
