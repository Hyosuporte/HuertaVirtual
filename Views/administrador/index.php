<?php require('Views/Templates/header.php') ?>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Addons</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-table"></i>
                <span>Tablas</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-dark py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tablas Principales:</h6>
                    <a class="collapse-item" href="">Repartidores</a>
                    <a class="collapse-item" href="">Proveedores</a>
                    <a class="collapse-item" href="">Plantas</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Tablas Secundarias:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div class="bg-dark" id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand bg-primary navbar-dark bg-primary topbar mb-4">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto d-flex ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="s" class="form-control form-control me-sm-2 border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                        <div class="input-group-append">
                            <button class="btn btn-primary btn btn-secondary my-2 my-sm-0" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline  small">
                                Poner Nombre Usuario</span>
                            <img class="img-profile rounded-circle" src="<?php echo BASE_URL; ?>Assets/img/profile.svg" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configuracion
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0">Tabla Repartidores</h1>
                    <div>
                        <button type="button" class="btn btn-success" onclick="frmNuevoRe()"><i class="fa-solid fa-circle-plus"></i> Nuevo Repartidor</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-download fa-sm"></i> Generar Reporte</button>
                    </div>
                </div>
                <div class="card border-secondary mb-4">
                    <div class="card-body table-responsive">
                        <h4 class="card-title">Repartidores Activos y No Activos</h4>
                        <table class="table table-dark table-striped" id="tblRepartidores">
                            <thead class="thead-dark">
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
                </div>
                <div id="NuevoRepartidor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
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
                                    <div class="row" id="passwords">
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
                                    <div class="row" id="campoVehi">
                                        <div class="form-group">
                                            <label for="idVehiculo">ID Vehiculo</label>
                                            <input id="idVehiculo" class="form-control" type="text" name="idVehiculo">
                                        </div>
                                    </div>
                                    <div class="row">
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
                                    <button type="button" class="btn btn-outline-success" onclick="frmRegistroRepar()" id="btnAccion"></button>
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