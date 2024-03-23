<?php
use App\Controllers\Rol;
use App\Controllers\Home;
use Bramus\Router\Router;
use App\Controllers\Login;
use App\Controllers\Usuario;
use App\Controllers\Categoria;





$router = new Router();
$login = new Login();
$home = new Home();
$rol = new Rol();
$usuario = new Usuario();
$categoria = new Categoria();


/*-----------Login-----------*/
$router->get('/', [$login, 'index']);
$router->post('login', [$login, 'login']);
$router->get('logout', [$login, 'logout']);

/*-----------home-----------*/
$router->get('home', [$home, 'index']);


/*-----------Roles-----------*/
$router->get('roles', [$rol, 'index']);
$router->get('rolesListar', [$rol, 'listarRoles']);
$router->post('rolRegistrar', [$rol, 'registrarRol']);
$router->get('rolObtener/(\d+)', [$rol, 'obtenerRol']);
$router->get('rolEliminar/(\d+)', [$rol, 'eliminarRol']);

/*-----------Usuarios-----------*/
$router->get('usuarios', [$usuario, 'index']);
$router->get('usuariosListar', [$usuario, 'listarUsuarios']);
$router->post('usuarioRegistrar', [$usuario, 'registrarUsuario']);
$router->get('usuarioListarId/(\d+)', [$usuario, 'listarUsuarioId']);
$router->get('usuarioEliminar/(\d+)', [$usuario, 'eliminarUsuario']);



/*-----------Usuarios-----------*/
$router->get('categorias', [$categoria, 'index']);





$router->run();
