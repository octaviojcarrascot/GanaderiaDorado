<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 menu_lateral">

    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ADMINISTRATIVO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/assets/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Luis Lozano</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                          Administrador de Sistemas
                          <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/usuario.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/propietario.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>propietarios</p>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/ganado.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ganado</p>
                            </a>
                        </li>

                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/feedlot.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Feedlot</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/raza.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Raza</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/vacuna.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vacunacion</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/rodeo.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rodeo</p>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/prenez.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Preñez</p>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/fallecimiento.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fallecimiento</p>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/servicio.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Servicios</p>
                            </a>
                        </li>

                    </ul>

                </li>
                
            </ul>

            <ul class="nav nav-pills nav-sidebar nav_profile">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>                        
                        <p>
                            Cerrar Sesion
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>