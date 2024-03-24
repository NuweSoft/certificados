<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" id="ModalCategoria">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-normal" id="tituloCategoria"></h6>
                <button type="button" class="btn-close text-primary" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="p-3" method="post" id="formCategoria">
                <div class="modal-body ">
                    <input type="hidden" class="form-control" id="id_categoria">
                    <div class="input-group input-group-dynamic my-3 mb-4">
                        <label class="form-label"><i class="fas fa-boxes"></i> Nombre</label>
                        <input type="text" class="form-control text-center" id="nombre_categoria" />
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6 text-center"><button type="button" class="btn bg-gradient-danger btn-sm" data-bs-dismiss="modal">Cancelar</button></div>
                    <div class="col-6 text-center"><button type="button" class="btn bg-gradient-success btn-sm" onclick="registrar_categoria(event)">Guardar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>