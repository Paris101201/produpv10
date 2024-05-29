<!-- Modal -->

<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal">
                    Nuevo Rol
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="formRol" name="formRol" method="post">
                            <input type="hidden" id="idRol" name="idRol" value="">
                            <div class="form-group">
                                <label>
                                    Nombre del Rol
                                </label>
                                <input class="form-control" id="txtNombreRol" name="txtNombreRol" type="text" placeholder="Nombre del rol" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Descripcion del Rol
                                </label>
                                <textarea class="form-control" id="txtDescripcionRol" name="txtDescripcionRol" rows="2" placeholder="Descripcion del rol" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>
                                    Estatus del rol
                                </label>
                                <select class="form-control" id="listaStatus" name="listaStatus" required="">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                            <div class="tile-footer">
                                <button id="btnActionForm" class="btn btn-primary" type="submit">
                                    <span class="fa fa-fw fa-lg fa-floppy-o icon"></span>
                                    <span id="btnText">
                                        Guardar
                                    </span>
                                </button>
                                &nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="#" data-dismiss="modal">
                                    <i class="fa fa-fw fa-lg fa-times-circle"></i>
                                    Cancelar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>