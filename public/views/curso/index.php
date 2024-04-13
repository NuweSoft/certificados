<?php require_once 'public/views/template/head.php'; ?>

<body class="g-sidenav-show  bg-gray-200">
    <?php require_once 'public/views/template/aside.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php require_once 'public/views/template/nav.php'; ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row m-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-sm-flex justify-content-between">
                            <div>
                                <small class="text-uppercase text-muted ls-1 mb-1"><b><?php echo TITLE ?></b></small>
                                <h5 class=" mb-0">Lista cursos</h5>
                            </div>
                            <div class="d-flex gap-1">
                                <button class="btn btn-outline-dark bg-gradient-dark  btn-sm text-center hover-scale hover-shadow" onclick="Mcurso(event);"><i class="fa fa-plus"></i> Nuevo</button>
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5 mt-4">
                            <div class="row">
                                <div class="align-items-center text-center">
                                    <a href="<?php echo BASE_URL ?>Curso/pdf" target="_blank" class="btn bg-gradient-primary btn-sm"><i class="fa-solid fa-file-pdf"> </i><b> PDF</b></a>
                                    <button onclick="imprimir()" class="btn bg-gradient-info btn-sm"><i class="fa-solid fa-print"></i><b> Print</b></button>
                                    <button onclick="excel()" class="btn bg-gradient-success btn-sm "><i class="fa-solid fa-file-excel"></i><b> Excel</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-items-center align-middle table-row-dashed fs-6 gy-5 responsive nowrap" role="grid" id="tbCurso" style="width: 100%; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 400 !important; ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Categoria</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Nombre</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Descripcion</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Fecha Inicio</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Fecha Fin</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Intructor(es)</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center fw-semibold text-gray-600"></tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <?php require_once 'public/views/template/footer.php'; ?>
        </div>
    </main>

    <?php require_once 'public/views/template/config.php'; ?>

    <?php require_once 'public/views/template/scripts.php'; ?>
    <script src="<?php echo BASE_URL ?>public/views/curso/curso.js"></script>

</body>

</html>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" id="ModalCurso">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-gradient-secondary">
                <h6 class="modal-title font-weight-normal text-white" id="tituloCurso"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form class="p-3" method="post" action="/file-upload" class="dropzone" id="formCurso">
                <div class="modal-body ">
                    <div class="row">
                        <input type="hidden" id="id_curso">
                        <div class="col-7">
                            <div class="input-group input-group-dynamic my-3 mt-5 mb-4">
                                <label class="form-label"><i class="fas fa-user"></i> Nombre</label>
                                <input type="text" class="form-control text-center" id="nombre_curso" />
                            </div>

                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label mb-2"><i class="fa-solid fa-calendar-check"></i> Inicio</label>
                                <input type="date" class="form-control text-center" id="fecha_ini" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fa-solid fa-calendar-day"></i></i> Fin</label>
                                <input type="date" class="form-control text-center" id="fecha_fin" />
                            </div>
                        </div>
                        <div class="col-5 mt-5">
                            <input type="hidden" id="imagen_anterior">
                            <input type="hidden" id="imagen_actual" value="default.png">
                            <small class="text-gray-700 d-block text-center m-1"><b>Foto</b></small>
                            <div class="fallback">
                                <label for="foto" class="bg-body shadow" style="cursor: pointer;">
                                    <input type="file" id="foto" multiple style="display: none;" onchange="preview(event)" />
                                    <div id="imagen" style="width: 150px; height: 150px; background-size: cover; background-position: center; border: 2px solid #ccc; border-radius: 10px;"></div>
                                </label>
                                <div class="text-center" id="botonEliminar" style="display: none;">
                                    <button class="btn btn-icon btn-2 btn-primary" type="button" onclick="deleteImg(this)">
                                        <span class="btn-inner--icon"><i class="fa-solid fa-trash"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="input-group input-group-dynamic my-3 mb-4">
                            <label for="descripcion" class="ms-0"><i class="fa-solid fa-audio-description"></i> Descripcion</label>
                            <div class="input-group input-group-static">
                                <textarea type="text" id="descripcion" class="form-control" rows="1" spellcheck="true"></textarea>
                            </div>
                        </div>
                        <label for="categoria_id" class="form-label ms-0"><i class="fas fa-boxes"></i> Categoria</label>
                        <div class="input-group input-group-solid flex-nowrap mb-4">
                            <div class="overflow-hidden flex-grow-1">
                                <select class="form-select form-select-sm text-center" aria-label="form-select-sm example" id="categoria_id">
                                </select>
                            </div>
                        </div>

                        <label for="instructor_id" class="form-label ms-0"><i class="fa-solid fa-chalkboard-user"></i> Instructor(es) </label>
                        <div class="input-group input-group-solid flex-nowrap mb-4">
                            <div class="overflow-hidden flex-grow-1">
                                <select class="form-select form-control text-center" multiple="multiple" aria-label="form-select-sm example" id="instructor_id">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" row text-center">
                        <div class="col-6 text-center"><button type="button" class="btn bg-gradient-danger btn-sm" data-bs-dismiss="modal">Cancelar</button></div>
                        <div class="col-6 text-center"><button type="button" class="btn bg-gradient-success btn-sm" onclick="registrar_curso(event)">Guardar</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" id="ModalVerCurso">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-gradient-secondary">
                <h6 class="modal-title font-weight-normal text-white"><b>Detalles del curso</b></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <nav class="flex min-w-0">
                        <p class="text-blue-400 dark:!text-blue-600 mb-2 truncate text-neutral-text text-mobile-small lg:text-desktop-small italic">
                            <i class="fa-solid fa-cube"></i>
                            <span>
                                <span>
                                    <a href="<?php echo BASE_URL ?>cursos" class="hover:underline"><b>Cursos &gt;</b></a>
                                </span>
                                <span class="text-neutral-text" id="curso"></span>
                            </span>
                        </p>
                    </nav>
                    <div class="col col-5 mt-3">
                        <div class="row">
                            <h4 id="categoria_nombre" class="h5 text-neutral-title mb-2"></h4>
                            <p id="descripcion_curso" class="text-desktop-normal mb-4 text-neutral-text"></p>
                            <div class="text-desktop-small mb-6">
                                <p class="font-semibold text-neutral-text"><b>Instructor(es)</b></p>
                                <ul class="text-neutral-text-light text-mobile-small md:text-desktop-small" id="instructor"></ul>
                            </div>
                            <div class="flex gap-5 gap-y-1 flex-wrap">
                                <span id="inicio" class="text-neutral-text text-mobile-small"></span><br>
                                <span id="fin" class="text-neutral-text text-mobile-small"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-7 mt-5">
                        <div class="order-1 lg:order-2 lg:col-span-4">
                            <div class="course-preview_preview__bnObo relative aspect-video lg:rounded-lg overflow-hidden">
                                <div class="course-preview_poster__6VwxY absolute h-full w-full duration-200">
                                    <div class="flex items-center justify-center absolute animate-pulse bg-neutral-border w-full h-full aspect-video">
                                        <img id="imagen_curso" loading="lazy" width="100%" height="350px" decoding="async" data-nimg="1" class="relative w-full h-full transition-all duration-200" style="color: transparent; border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="text-center">
                        <button type="button" class="btn bg-gradient-success btn-sm" data-bs-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>