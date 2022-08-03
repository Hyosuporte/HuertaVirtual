<?php require_once('Views/Templates/Admin.php') ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">Tabla Plantas</h1>
    <div>
        <button type="button" class="btn btn-success" onclick="frmNuevaPlan()"><i class="fa-solid fa-circle-plus"></i> Nuevo Planta</button>
        <button type="button" class="btn btn-primary"><i class="fas fa-download fa-sm"></i> Generar Reporte</button>
    </div>
</div>
<div class="card border-secondary mb-4">
    <div class="card-body table-responsive">
        <h4 class="card-title">Proveedores</h4>
        <table class="table table-dark table-striped" id="tblPlantas">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>SIEMBRA</th>
                    <th>RIEGO</th>
                    <th>SOL</th>
                    <th>TEMPERATURA</th>
                    <th>CUIDADOS</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    <th>CATEGORIA</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div id="NuevaPlanta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #9d7add;">
                <h5 class="modal-title" id="title"></h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmNuevaPlan">
                    <div class="row">
                        <input type="hidden" name="id" id="id" >
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="siembra">Siembra</label>
                                <input id="siembra" class="form-control" type="date" name="siembra" placeholder="Fecha Siembra">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="text" name="cantidad" placeholder="Cantidad">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input id="precio" class="form-control" type="text" name="precio" placeholder="Precio">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" class="form-control" name="categoria">
                            <option value="1">Hortalizas</option>
                            <option value="2">Verduras</option>
                            <option value="3">Frutas</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-outline-success" onclick="frmRegistroPlan()" id="btnAccion"></button>
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
<?php require_once('Views/Templates/footer.php') ?>