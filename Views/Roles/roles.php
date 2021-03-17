<?php
headerAdmin($data);
?>
<!-- navbar N°2 -->
<div class="app-page-title">
    <div class="page-title-wrapper">
        <!-- Ubicacion de pagina -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-user-md icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div><?= $data['page_title']; ?>
                <div class="page-title-subheading"><?= $data['page_description']; ?>
                </div>
            </div>
        </div>
        <!-- Acciones buttons-->
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =================Seccion para editar pagina en blanco================== -->



<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="card-title">Basic Examples</div>
                <!-- Button  modal -->
                <button type="button" class="btn mr-2 mb-2 btn-primary" onclick="openModal();">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo js
                </button>
                <!-- <button type="button" class="btn mr-2 mb-2 btn-success" data-toggle="modal" data-target="#modalFormRol">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo
                </button> -->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableRoles" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Status</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========================Fin de pagina en blanco======================= -->
<?php
footerAdmin($data); 
getModal('modalRoles', $data);
?>