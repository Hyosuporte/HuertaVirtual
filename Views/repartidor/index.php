<?php require('Views/Templates/header.php') ?>
<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Repartidores <br>
    <button type="button" class="btn btn-success mb-2 " onclick="frmNuevoRe()">Nuevo</button>
    <table class="table table-hover table-dark" id="tblRepartidores">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>ID VEHICULO</th>
                <th>ESTADO</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div id="NuevoRepartidor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Nuevo Repartidor</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmNuevoRe">
                    <div class="form-group">
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
                                <label for="password">Contraseña</label>
                                <input id="password" class="form-control" type="password" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="passwordConf">Confirmar Contraseña</label>
                                <input id="passwordConf" class="form-control" type="password" name="passwordConf" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="idVehiculo">ID Vehiculo</label>
                            <input id="idVehiculo" class="form-control" type="text" name="idVehiculo">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="marca">Marca Vehiculo</label>
                                <input id="marca" class="form-control" type="text" name="marca" placeholder="Marca Vehiculo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vehiculo">Tipo Vehiculo</label>
                                <select id="vehiculo" class="form-control" name="vehiculo">
                                    <option value="Moto">Moto</option>
                                    <option value="Carro">Carro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="modelo">Modelo</label>
                                <input id="modelo" class="form-control" type="text" name="modelo" placeholder="Modelo Vehiculo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="placa">Placa</label>
                                <input id="placa" class="form-control" type="text" name="placa" placeholder="Placa Vehiculo">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-success" onclick="frmRegistroRepar()">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require('Views/Templates/footer.php') ?>