<?php require_once 'public/views/template/head.php'; ?>

<body class="g-sidenav-show  bg-gray-200">
    <?php require_once 'public/views/template/aside.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php require_once 'public/views/template/nav.php'; ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center m-4">
                <div class="col-xl-4 mobile-hide mt-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="<?php echo BASE_URL ?>public/assets/img/sistema/rol.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"  style=" width: 100%; height: 300px;">
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL ?>public/assets/img/sistema/rol.png&quot;);height: 100%; position: absolute; top: 0px; left: 0px; background-size: cover; "></div>
                        </div>
                        <div class="card-body text-center">
                            <div class="d-flex mt-n6 mx-auto justify-content-center">
                                <button class="btn btn-outline-dark bg-gradient-dark  btn-sm text-center hover-scale hover-shadow" onclick="Mrol(event);"><i class="fa fa-plus"></i> Nuevo</button>
                            </div>
                            <p class="mb-0 mt-3">
                                El registro de roles es importante para la gestión de los usuarios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-sm-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-sm-flex justify-content-between">
                                <div>
                                    <small class="text-uppercase text-muted ls-1 mb-1"><b><?php echo TITLE ?></b></small>
                                    <h5 class=" mb-0">Lista roles</h5>
                                </div>
                                <div class="d-flex gap-1">
                                    <button id="mod" class="btn btn-outline-dark bg-gradient-dark  btn-sm text-center hover-scale hover-shadow" onclick="Mrol(event);"><i class="fa fa-plus"></i> Nuevo</button>
                                </div>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="row">
                                    <div class="align-items-center text-center">
                                        <a href="<?php echo BASE_URL ?>Usuario/pdf" target="_blank" class="btn bg-gradient-primary btn-sm"><i class="fa-solid fa-file-pdf"> </i><b> PDF</b></a>
                                        <button onclick="imprimir()" class="btn bg-gradient-info btn-sm"><i class="fa-solid fa-print"></i><b> Print</b></button>
                                        <button onclick="excel()" class="btn bg-gradient-success btn-sm "><i class="fa-solid fa-file-excel"></i><b> Excel</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table align-items-center align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="tbRoles">
                                    <thead>
                                        <tr>
                                            <th class="text-Start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                                            <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs opacity-7">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once 'public/views/template/footer.php'; ?>
        </div>
    </main>
    <?php require_once 'public/views/template/config.php'; ?>
    <?php require_once 'public/views/template/scripts.php'; ?>
    <script src="<?php echo BASE_URL ?>public/views/rol/rol.js"></script>
</body>

</html>
<?php require_once 'public/views/rol/rolModal.php'; ?>