<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-labelledby="modalFormRolLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="color: #fff;">
                <h5 class="modal-title" id="modalFormRolLabel">Nuevo Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" id="formRol" name="formRol">
                    <div class="position-relative form-group">
                        <label for="nombre" class="">Nombre</label>
                        <input name="text" id="txtNombre" placeholder="Nombre del rol" type="text" class="form-control" required>
                        <div class="valid-feedback">Correcto!</div>
                        <div class="invalid-feedback">Nombre incorrecto</div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleText" class="">Descripcion</label>
                        <textarea name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion del rol" class="form-control" rows="2" required></textarea>
                        <div class="valid-feedback">Correcto!</div>
                        <div class="invalid-feedback"> Agregar descripcion</div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Estado</label>
                        <select name="listStatus" id="listStatus" class="form-control">
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <div class="title-footer">
                        <button class="btn btn-success" type="submit"><i class="fa fa-check-circle"></i> Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal();"><i class="fa fa-times-circle"></i> Cancelar</button>
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
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>