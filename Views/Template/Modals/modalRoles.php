<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-labelledby="modalFormRolLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="color: #fff;">
                <h5 class="modal-title" id="modalFormRolLabel">Nuevo Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="forRol" name="forRol">
                    <div class="position-relative form-group">
                        <label for="nombre" class="">Nombre</label>
                        <input name="text" id="nombre" placeholder="Nombre del rol" type="text" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleText" class="">Descripcion</label>
                        <textarea name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion del rol" class="form-control" rows="2" required></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Estado</label>
                        <select name="listStatus" id="listStatus" class="form-control" required>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <div class="title-footer">
                        <button class="btn btn-success" type="submit"><i class="fa fa-check-circle"></i> Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancelar</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div> -->
        </div>
    </div>
</div>