<?php

require dirname(__DIR__) . '/../vendor/autoload.php';
header("Access-Control-Allow-Origin: *");

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Config\Websocket;
$port = 8888;
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Websocket()
        )
    ),
    $port
);
$server->run();
