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
                                <h5 class=" mb-0">Lista instructores</h5>
                            </div>
                            <div class="d-flex gap-1">
                                <button class="btn btn-outline-dark bg-gradient-dark  btn-sm text-center hover-scale hover-shadow" onclick="Minstructor(event);" ><i class="fa fa-plus"></i> Nuevo</button>
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5 mt-4">
                            <div class="row">
                                <div class="align-items-center text-center">
                                    <a href="<?php echo BASE_URL ?>Instructor/pdf" target="_blank" class="btn bg-gradient-primary btn-sm"><i class="fa-solid fa-file-pdf"> </i><b> PDF</b></a>
                                    <button onclick="imprimir()" class="btn bg-gradient-info btn-sm"><i class="fa-solid fa-print"></i><b> Print</b></button>
                                    <button onclick="excel()" class="btn bg-gradient-success btn-sm "><i class="fa-solid fa-file-excel"></i><b> Excel</b></button>
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ci</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">nombre(s)</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">apellido(s)</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">direccion</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">telefono</th>
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
    <script src="<?php echo BASE_URL ?>public/views/instructor/instructor.js"></script>

</body>

</html>

<?php require_once 'public/views/instructor/instructorModal.php'; ?>