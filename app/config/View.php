<?php
namespace App\Config;

class View
{
    public function render($route, $view, $data = [])
    {
        $routeBase = __DIR__ . '/../../public/views/' . $route . '/';
        $archivo = $routeBase . $view . '.php';

        if (file_exists($archivo)) {
            ob_start();
            require $archivo;
            $output = ob_get_clean();
            return $output;
        } else {
            throw new \Exception("Error: No se puede encontrar la vista '$archivo'");
        }
    }
}

