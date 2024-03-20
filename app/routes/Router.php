<?php
use App\Controllers\Rol;
use App\Controllers\Home;
use Bramus\Router\Router;
use App\Controllers\Login;





$router = new Router();
$login = new Login();
$home = new Home();
$rol = new Rol();


/*-----------Login-----------*/
$router->get('/', [$login, 'index']);
$router->post('login', [$login, 'login']);

/*-----------home-----------*/
$router->get('home', [$home, 'index']);


/*-----------Roles-----------*/
$router->get('roles', [$rol, 'index']);
$router->get('rolesListar', [$rol, 'listarRoles']);
$router->post('rolRegistrar', [$rol, 'registrarRol']);
$router->get('rolObtener/(\d+)', [$rol, 'obtenerRol']);
$router->get('rolEliminar/(\d+)', [$rol, 'eliminarRol']);










$router->run();
