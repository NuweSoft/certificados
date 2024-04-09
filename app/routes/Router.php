<?php
use App\Controllers\Rol;
use App\Controllers\Home;
use Bramus\Router\Router;
use App\Controllers\Curso;
use App\Controllers\Login;
use App\Controllers\Usuario;
use App\Controllers\Categoria;
use App\Controllers\Dashboard;
use App\Controllers\Instructor;
use App\Controllers\Certificado;
use App\Controllers\CursoUsuario;





$router = new Router();
$login = new Login();
$home = new Home();
$rol = new Rol();
$usuario = new Usuario();
$categoria = new Categoria();
$instructor= new Instructor();
$curso = new Curso();
$certificado = new Certificado();
$curso_usuario= new CursoUsuario();
$dashboard= new Dashboard();


/*-----------Login-----------*/
$router->get('login', [$login, 'index']);
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

/*-----------Cursos-----------*/
$router->get('curso', [$curso, 'index']);
$router->get('cursosListar', [$curso, 'listarCursos']);
$router->post('cursoRegistrar', [$curso, 'registrarCurso']);
$router->get('cursoObtener/(\d+)', [$curso, 'obtenerCurso']);
$router->get('cursoEliminar/(\d+)', [$curso, 'eliminarCurso']);

/*-----------Sub categorias-----------*/
/* $router->get('sub_categorias', [$sub_categoria, 'index']);
$router->get('sub_categoriasListar', [$sub_categoria, 'listarSub_categorias']);
$router->post('sub_categoriaRegistrar', [$sub_categoria, 'registrarSub_categoria']);
$router->get('sub_categoriaObtener/(\d+)', [$sub_categoria, 'obtenerSub_categoria']);
$router->get('sub_categoriaEliminar/(\d+)', [$sub_categoria, 'eliminarSub_categoria']);
 */

 /* -----------Certificado-----------*/
  $router->get('certificados', [$certificado, 'index']);

   /* -----------CursosUsuarios-----------*/
   $router->get('/', [$dashboard, 'index']);
   $router->get('cursosNuevos', [$dashboard, 'listarCursosNuevos']);
   $router->get('cursosLista', [$dashboard, 'listarCursos']);
   $router->get('curso/(\d+)/([a-zA-Z0-9]+)', [$dashboard, 'cursoId']);

$router->run();
