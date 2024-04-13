<?php require_once 'public/views/layout/head.php'; ?>

<body class="presentation-page bg-gray-200">
    <?php require_once 'public/views/layout/nav.php'; ?>
    <main class="container mt-4 py-6">
        <div class="row text-center mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12 mb-sm-5">
                <div class="card card-shadow p-1">
                    <h1 class="h5 text-start font-weight-bolder mt-4 ">Categoria</h1>
                    <h1 class="h2 text-start font-weight-bolder mt-1 ">Desarrollo de videojuegos</h1>
                    <p class="text-start">
                        Aprender a desarrollar videojuegos con el motor Unity y tecnologías web
                    </p>
                    <p class="text-start">
                        El desarrollo de videojuegos es un área de la tecnología que mueve más dinero que la industria del cine y está en constante crecimiento. En esta carrera aprenderás a crear tu primer videojuego con tecnologías web y con el motor Unity, la herramienta más usada de esta industria.
                    </p>
                    <div class=" text-start flex flex-col lg:items-center gap-4">
                        <p class="text-desktop-small italic">
                            Recomienda esta carrera a tus amigos
                        </p>
                        <div class="flex gap-4">
                            <a title="Compartir en Facebook" href="#">
                                <i class="fab fa-facebook text-lg"></i>
                            </a>
                            <a title="Compartir en Twitter" href="#" target="_blank">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <a title="Compartir en Linkedin" href="#" target="_blank">
                                <i class="fab fa-linkedin text-lg"></i>
                            </a>
                            <a title="Compartir en Whatsapp" href="#" target="_blank">
                                <i class="fab fa-whatsapp text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-4 col-sm-12">
                <div class="flex justify-center sticky">
                    <div class="relative aspect-video">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 ">
                                <a class="d-block" id="img_curso">
                                    <img src="<?php echo BASE_URL ?>public/assets/img/sistema/categoria.png" class="img-fluid shadow border-radius-lg" style="height: 350px; width: 100%;">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <div id="img_instructor" class="avatar avatar-lg position-relative mt-n6 mx-auto z-index-2">
                                    <img  src="http://via.placeholder.com/64x64" class="rounded-circle m-1" alt="">
                                </div>
                                <h5 class="font-weight-normal mt-1">
                                    Desarrollo de videojuegos
                                </h5>
                                <button class="col-12 btn btn-lg btn-block bg-gradient-primary mt-2">
                                    <span class="text-animation"><b>Inscribirme gratis</b></span>
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>


    <?php require_once 'public/views/layout/footer.php'; ?>
    <?php require_once 'public/views/layout/scripts.php'; ?>