<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--    <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="<?php echo BASE_URL ?>public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL ?>public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/assets/css/toastr.css" type="text/css">
    <link id="pagestyle" href="<?php echo BASE_URL ?>public/assets/css/material-dashboard.min.css" rel="stylesheet" />
    <title><?php echo TITLE ?></title>

</head>

<body class="bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar Sesión</h4>
                                    <div class="row mt-3">
                                        <div class="col-2 text-center px-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" class="text-start">
                                    <div class="input-group input-group-dynamic my-3 mb-4">
                                        <label class="form-label"><i class="fas fa-envelope"></i> Correo</label>
                                        <input type="email" pattern="^(?=.*[0-9])$" class="form-control text-center" id="correo" />
                                    </div>
                                    <div class="input-group input-group-dynamic my-3 mb-4">
                                        <label class="form-label"><i class="fa fa-key"></i> Contraseña</label>
                                        <input type="password" pattern="[A-Za-z]{3}" class="form-control text-center" id="contra" />
                                        <span class="input-group-text" style="cursor: pointer;" id="basic-addon2" onclick="mostrarPassword('contra', 'icono-contra')"><i class="fas fa-eye" id="icono-contra"></i></span>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2" onclick="login(event)">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                echo con <i class="fa fa-heart text-danger" aria-hidden="true"></i> por
                                <a href="#" class="font-weight-bold text-white" target="_blank">NuweSoft</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="<?php echo BASE_URL ?>public/assets/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/assets/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/assets/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/assets/js/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script src="<?php echo BASE_URL ?>public/assets/js/toastr.js"></script>
    <script async defer src="<?php echo BASE_URL ?>public/assets/js/buttons.js"></script>

    <script src="<?php echo BASE_URL ?>public/assets/js/material-dashboard.min.js"></script>
    <script>
        const BASE_URL = '<?php echo BASE_URL ?>';
    </script>
    <script src="<?php echo BASE_URL ?>public/views/auth/auth.js"></script>
</body>

</html>