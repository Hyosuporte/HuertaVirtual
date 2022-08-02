<?php require('Views/Templates/Admin.php') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">Tabla Proveedores</h1>
    <div>
        <button type="button" class="btn btn-success" onclick="frmNuevoPr()"><i class="fa-solid fa-circle-plus"></i> Nuevo Repartidor</button>
        <button type="button" class="btn btn-primary"><i class="fas fa-download fa-sm"></i> Generar Reporte</button>
    </div>
</div>
<div class="card border-secondary mb-4">
    <div class="card-body table-responsive">
        <h4 class="card-title">Proveedores</h4>
        <table class="table table-dark table-striped" id="tblProveedores">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>SEMILLAS</th>
                    <th>CANTIDAD</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div id="NuevoProveedor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #9d7add;">
                <h5 class="modal-title" id="title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmNuevoRe">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="semilla">Semilla</label>
                                <input id="semilla" class="form-control" type="text" name="semilla" placeholder="Semilla">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="text" name="cantidad" placeholder="Cantidad">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-success" onclick="frmRegistroProv()" id="btnAccion"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>Content</p>
            </div>
        </div>
    </div>
</div>
<?php require('Views/Templates/footer.php') ?>