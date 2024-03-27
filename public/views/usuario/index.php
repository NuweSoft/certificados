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
                                <h5 class=" mb-0">Lista usuarios</h5>
                            </div>
                            <div class="d-flex gap-1">
                                <button class="btn btn-outline-dark bg-gradient-dark  btn-sm text-center hover-scale hover-shadow" onclick="Musuario(event);"><i class="fa fa-plus"></i> Nuevo</button>
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5 mt-4">
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
                            <table class="table align-items-center align-middle table-row-dashed fs-6 gy-5 responsive nowrap" id="tbUsuario" style="width: 100%; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 400 !important; ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ci</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">nombre(s)</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">apellido(s)</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">direccion</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center d-none d-md-table-cell">telefono</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">rol</th>
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
    <script src="<?php echo BASE_URL ?>public/views/usuario/usuario.js"></script>

</body>

</html>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" id="ModalUsuario">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-gradient-secondary">
                <h6 class="modal-title font-weight-normal text-white" id="tituloUsuario"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form class="p-3" method="post" action="/file-upload" class="dropzone" id="formUsuario">
                <div class="modal-body ">
                    <div class="row">
                    <input type="hidden" id="imagen_anterior">
                        <input type="hidden" id="id_usuario">
                        <div class="col-7">
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fa-solid fa-address-card"></i> Cedula de indetificacion</label>
                                <input type="number" class="form-control text-center" id="ci" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fas fa-user"></i> Nombre(s)</label>
                                <input type="text" class="form-control text-center" id="nombre" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fas fa-signature"></i> Apellido(s)</label>
                                <input type="text" class="form-control text-center" id="apellido" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fas fa-map-location-dot"></i> Direccion</label>
                                <input type="text" class="form-control text-center" id="direccion" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fas fa-phone"></i> Telefono</label>
                                <input type="number" class="form-control text-center" id="telefono" />
                            </div>
                        </div>
                        <div class="col-5 mt-7">
                        <input type="hidden" id="imagen_actual" value="default.png">
                            <small class="text-gray-700 d-block text-center m-1"><b>Foto</b></small>
                            <div class="fallback">
                                <label for="foto" class="bg-body shadow" style="cursor: pointer;">
                                    <input type="file" id="foto" multiple style="display: none;" onchange="preview(event)" />
                                    <div id="imagen" style="width: 150px; height: 150px; background-size: cover; background-position: center; border: 2px solid #ccc; border-radius: 10px;"></div>
                                </label>
                                <div class="text-center" id="botonEliminar" style="display: none;">
                                    <button  class="btn btn-icon btn-2 btn-primary" type="button" onclick="deleteImg(this)">
                                        <span class="btn-inner--icon"><i class="fa-solid fa-trash"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="corre" class="input-group input-group-dynamic my-3 mb-4">
                            <label class="form-label"><i class="fas fa-envelope"></i> Correo</label>
                            <input type="email" pattern="^(?=.*[0-9])$" class="form-control text-center" id="correo" />
                        </div>
                        <div class="row" id="contraseñas">
                            <div class="col-6">
                                <div class="input-group input-group-dynamic my-3 mb-4">
                                    <label class="form-label"><i class="fa-solid fa-lock"></i> Contraseña</label>
                                    <input type="password" pattern="[A-Za-z]{3}" class="form-control text-center" id="contra" />
                                    <span class="input-group-text" style="cursor: pointer;" id="basic-addon2" onclick="mostrarPassword('contra', 'icono-contra')"><i class="fas fa-eye" id="icono-contra"></i></span>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-dynamic my-3 mb-4">
                                    <label class="form-label"><i class="fas fa-key"></i> Confirmar contraseña</label>
                                    <input type="password" pattern="[A-Za-z]{3}" class="form-control text-center" id="confirmar" />
                                    <span class="input-group-text" style="cursor: pointer;" id="basic-addon2" onclick="mostrarPassword('confirmar', 'icono-confirmar')"><i class="fas fa-eye" id="icono-confirmar"></i></span>
                                </div>
                            </div>
                        </div>
                        <label class="form-label"> <i class="fa-regular fa-address-card"></i> Rol</label>
                        <div class="input-group input-group-solid flex-nowrap mb-4">
                            <div class="overflow-hidden flex-grow-1">
                                <select class="form-select form-select-sm text-center" aria-label="form-select-sm example" id="rol_id">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-6 text-center"><button type="button" class="btn bg-gradient-danger btn-sm" data-bs-dismiss="modal">Cancelar</button></div>
                        <div class="col-6 text-center"><button type="button" class="btn bg-gradient-success btn-sm" onclick="registrar_usuario(event)">Guardar</button></div>
                    </div>
            </form>
        </div>
    </div>
</div>
