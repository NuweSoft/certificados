<?php
date_default_timezone_set('America/La_Paz');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Allow: GET, POST");
header('Access-Control-Allow-Credentials: true');

require_once 'vendor/autoload.php';
require_once 'app/config/Config.php';
require_once 'app/routes/Router.php';