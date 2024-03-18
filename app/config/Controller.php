<?php

namespace App\Config;

use Exception;

class Controller
{
    protected $data;
    protected $header;
    protected $method;

    public function __construct()
    {
        $this->data = json_decode(file_get_contents('php://input'), true);
        $this->header = getallheaders();
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function response(array $data)
    {
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit();
    }
    


    public function exists(array $params)
    {
        try {
            $missingParams = $this->getMissingParams($params);

            if (!empty($missingParams)) {
                $this->response(["Parámetros faltantes: " . implode(',', $missingParams)], 'error', 400);
            }

            $this->validate();
            return true;
        } catch (Exception $e) {
            $this->response([$e->getMessage()], 'error', 400);
        }
    }

    private function getMissingParams(array $params): array
    {
        return array_diff($params, array_keys($this->data));
    }

    private function validate(): void
    {
        $emptyParams = $this->getEmptyParams();

        if (!empty($emptyParams)) {
            $this->response(["Parámetros vacíos: " . implode(',', $emptyParams)], 'error', 400);
        }
    }

    private function getEmptyParams(): array
    {
        $emptyParams = [];

        foreach ($this->data as $key => $value) {
            if (empty($value)) {
                $emptyParams[] = $key;
            }
        }

        return $emptyParams;
    }
}
