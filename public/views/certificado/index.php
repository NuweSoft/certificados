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
                                <h5 class=" mb-0">Detalle certificados</h5>
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5 mt-4">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 mt-5 text-center">
                                    <label for="categoria_id" class="form-label ms-0"><i class="fa-solid fa-table-list"></i> Cursos</label>
                                    <div class="input-group input-group-solid flex-nowrap mb-4">
                                        <div class="overflow-hidden flex-grow-1">
                                            <select class="form-select form-select-sm text-center" aria-label="form-select-sm example" id="curso_id">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 text-center">
                                    <input type="hidden" id="imagen_actual" value="default.png">
                                    <small class="text-gray-700 d-block m-1"><b>Imagen de certificado</b></small>
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

                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-items-center align-middle table-row-dashed fs-6 gy-5 responsive nowrap" id="tbInstructor" style="width: 100%; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 400 !important; ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Curso</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Estudiante</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">fecha inicio</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">fecha Fin</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">instructor</th>
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
    <script src="<?php echo BASE_URL ?>public/views/certificado/certificado.js"></script>

</body>

</html>