<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" id="ModalInstructor">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-gradient-secondary">
                <h6 class="modal-title font-weight-normal text-white" id="tituloInstructor"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form class="p-3" method="post" action="/file-upload" class="dropzone" id="formInstructor">
                <div class="modal-body ">
                    <div class="row">
                        <input type="hidden" id="id_instructor">
                        <div class="col-7">
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fa-solid fa-address-card"></i> Cedula de indetificacion</label>
                                <input type="number" class="form-control text-center" id="ci" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fas fa-user"></i> Nombre(s)</label>
                                <input type="text" class="form-control text-center" id="nombre_instructor" />
                            </div>
                            <div class="input-group input-group-dynamic my-3 mb-4">
                                <label class="form-label"><i class="fas fa-signature"></i> Apellido(s)</label>
                                <input type="text" class="form-control text-center" id="apellido_instructor" />
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

                        <div id="corre" class="input-group input-group-dynamic my-3 mb-4">
                            <label class="form-label"><i class="fas fa-envelope"></i> Correo</label>
                            <input type="email" pattern="^(?=.*[0-9])$" class="form-control text-center" id="correo" />
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-6 text-center"><button type="button" class="btn bg-gradient-danger btn-sm" data-bs-dismiss="modal">Cancelar</button></div>
                        <div class="col-6 text-center"><button type="button" class="btn bg-gradient-success btn-sm" onclick="registrar_instructor(event)">Guardar</button></div>
                    </div>
            </form>
        </div>
    </div>
</div>