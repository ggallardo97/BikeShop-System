<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BikeShop Oran</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/sb-admin-2.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css'); ?>">
    <link rel="icon" href="<?php echo base_url('/assets/img/BikeShopOranLogo.png'); ?>" type="image/png"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/waitMe.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/waitMe.min.css'); ?>">
    
</head>

<?php if(isset($_SESSION['user'])){ ?>
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('inicio');?>">
                <div class="sidebar-brand-text mx-3">BikeShop <sup>Oran</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('inicio');?>">
                    <i class="fas fa-fw fa-house"></i>
                    <span>Inicio</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Secciones
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('productos');?>">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Productos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('categorias');?>">
                    <i class="fas fa-fw fa-person-biking"></i>
                    <span>Categorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('historial');?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Historial de ventas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('clientes');?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Clientes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('cierres');?>">
                    <i class="fas fa-fw fa-dollar"></i>
                    <span>Cierres</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('estadisticas');?>">
                    <i class="fas fa-chart-pie"></i>
                    <span>Estadisticas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                         <!-- Nav Item - Cart -->
                         <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link" href="<?php echo base_url('carrito');?>" id="messagesDropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-shopping fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter" id="cantidad-carrito">
                                <?php 
                                    if(isset($_SESSION['carrito']) && isset($_COOKIE['working']) && isset($_COOKIE['key2'])){ 
                                        echo count($_SESSION['carrito']);
                                    }else echo '0';
                                    ?>
                                </span>
                            </a>
                        </li>

                        <!-- Nav Item - Power off -->
                        <li class="nav-item dropdown no-arrow mx-1">
                        <?php if(isset($_COOKIE['working']) && isset($_COOKIE['key2'])){ ?>
                            <a class="nav-link" id="finjornada" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-power-off fa-fw"></i>
                            </a>
                        <?php }else{ ?>
                            <a class="nav-link" id="iniciarjornada" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-power-off fa-fw"></i>
                            </a>
                        <?php }?>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <?php if(isset($_COOKIE['working']) && isset($_COOKIE['key2'])){ ?>
                            <button class="btn btn-success btn-sm" id="botonState" role="button" disabled>
                                Online
                            </button>
                            <?php }else{ ?>
                            <button class="btn btn-danger btn-sm" id="botonState" role="button" disabled>
                                Offline
                            </button>
                            <?php }?>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user']['username'].' '.$_SESSION['user']['userlastname']?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('/assets/img/BikeShopOranLogo.png'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('configuraciones');?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuraciones
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
    <?php } ?>