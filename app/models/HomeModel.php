<?php

namespace App\Models;

use Exception;
use App\Config\Query;
use App\Config\Response;
use App\Config\Seguridad;

class HomeModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
}