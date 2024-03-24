<?php
use App\Controllers\Rol;
use App\Controllers\Home;
use Bramus\Router\Router;
use App\Controllers\Login;
use App\Controllers\Usuario;
use App\Controllers\Categoria;
use App\Controllers\Instructor;





$router = new Router();
$login = new Login();
$home = new Home();
$rol = new Rol();
$usuario = new Usuario();
$categoria = new Categoria();
$instructor= new Instructor();


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



/*-----------Categorias-----------*/
$router->get('categorias', [$categoria, 'index']);
$router->get('categoriasListar', [$categoria, 'listarCategorias']);
$router->post('categoriaRegistrar', [$categoria, 'registrarCategoria']);
$router->get('categoriaObtener/(\d+)', [$categoria, 'obtenerCategoria']);
$router->get('categoriaEliminar/(\d+)', [$categoria, 'eliminarCategoria']);

/*-----------Instructores-----------*/
$router->get('instructores', [$instructor, 'index']);
$router->get('instructoresListar', [$instructor, 'listarInstructores']);
$router->post('instructorRegistrar', [$instructor, 'registrarInstructor']);
$router->get('instructorObtener/(\d+)', [$instructor, 'obtenerInstructor']);
$router->get('instructorEliminar/(\d+)', [$instructor, 'eliminarInstructor']);


$router->run();
