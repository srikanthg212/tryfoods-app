<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Items Management </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

        <!-- Datatables-->
   <link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/datatables.net-keytable-bs/css/keyTable.bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/datatables.net-responsive-bs/css/responsive.bootstrap.css') }}">
        <!-- =============== BOOTSTRAP STYLES ===============-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> TRY.FOODS Admin Dashboard </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="./dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item"><a class="nav-link" href="#ecommerce" title="eCommerce" data-toggle="collapse">
                <span class="nav-link"> Add Products </span></a>
                <ul class="sidebar-nav sidebar-subnav collapse " id="ecommerce">
                    <li class=" "><a class="nav-link" href="./items" title="Orders"> <span class="nav-text">Base Items</span></a></li>
                    <li class=" "><a class="nav-link" href="./mixins" title="Mixins"><span class="nav-text">Mix-Ins View</span></a></li>
                    <li class=" "><a class="nav-link" href="./proteins" title="Proteins"><span class="nav-text">Proteins</span></a></li>
                    <li class=" "><a class="nav-link" href="./dressings" title="Dressings"><span class="nav-text">Dressings </span></a></li>
                    <li class=" "><a class="nav-link" href="./toppings" title="Toppings"><span class="nav-text">Toppings</span></a></li>
                </ul>
            </li>

            
            <li class="nav-item"><a class="nav-link" href="#ecommerce01" title="eCommerce" data-toggle="collapse">
                <span class="nav-link"> Favorites </span></a>
                <ul class="sidebar-nav sidebar-subnav collapse " id="ecommerce01">
                    <li class=" "><a class="nav-link" href="ecommerce-orders.html" title="Orders"><span class="nav-text"> Item 01 </span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-order-view.html" titale="Order View"><span class="nav-text">Item 02 </span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-products.html" title="Products"><span class="nav-text">Item 03 </span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-product-view.html" title="Product View"><span class="nav-text"> Item 04 </span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-checkout.html" title="Checkout"><span class="nav-text"> Item 05 </span></a></li>
                </ul>
            </li>

            
            <li class="nav-item"><a class="nav-link" href="#ecommerce02" title="eCommerce" data-toggle="collapse">
                <span class="nav-link"> eCommerce </span></a>
                <ul class="sidebar-nav sidebar-subnav collapse " id="ecommerce02">
                    <li class=" "><a class="nav-link" href="ecommerce-orders.html" title="Orders"> <span class="nav-text">Orders</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-order-view.html" titale="Order View"><span class="nav-text">Order View</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-products.html" title="Products"><span class="nav-text">Products</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-product-view.html" title="Product View"><span class="nav-text">Product View</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-checkout.html" title="Checkout"><span class="nav-text">Checkout</span></a></li>
                </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="#ecommerce03" title="eCommerce" data-toggle="collapse">
                <span class="nav-link"> eCommerce </span></a>
                <ul class="sidebar-nav sidebar-subnav collapse " id="ecommerce03">
                    <li class=" "><a class="nav-link" href="ecommerce-orders.html" title="Orders"> <span class="nav-text">Orders</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-order-view.html" titale="Order View"><span class="nav-text">Order View</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-products.html" title="Products"><span class="nav-text">Products</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-product-view.html" title="Product View"><span class="nav-text">Product View</span></a></li>
                    <li class=" "><a class="nav-link" href="ecommerce-checkout.html" title="Checkout"><span class="nav-text">Checkout</span></a></li>
                </ul>
            </li>

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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->