<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
$data = [
    'BASE_URL' => $_ENV['BASE_URL'] ?? '',
    'TITLE' => $_ENV['TITLE'] ?? '',
    'HOST' => $_ENV['HOST'] ?? '',
    'DB' => $_ENV['DB'] ?? '',
    'USER' => $_ENV['USER'] ?? '',
    'PASS' => $_ENV['PASS'] ?? '',
    'CHARSET' => $_ENV['CHARSET'] ?? '',

];
define('BASE_URL', $data['BASE_URL']);
define('TITLE', $data['TITLE']);
