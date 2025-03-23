<!doctype html>
<html lang="en">
<head>
    <title>Travel Haji dan Umroh</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="<?php echo base_url(); ?>image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css"> -->

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/color_skins.css">

    <!-- DATATABLE & SWEETALERT -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert.css"/>

    <!-- Theme Umroh CSS (override) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/template/css/style.css">

    <!-- JQUERY -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- DATATABLE SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert.min.js"></script>

    <!-- CRUD (Contoh) -->
    <script src="<?php echo base_url('public/lib/crud.js');?>"></script>
    <script src="<?php echo base_url('public/lib/chainedSelect.js');?>"></script>
    
    <script>
        var baseUrl = '<?php echo base_url(); ?>';
        var currentClass = '<?php echo $this->router->fetch_class(); ?>';
        var baseClass = baseUrl + 'user' + '/' + currentClass;
    </script>
</head>

<!-- Ganti class "theme-blue" menjadi "theme-umroh" -->
<body class="theme-umroh">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img src="<?php echo base_url(); ?>assets/images/thumbnail.png"
                 width="48" height="48" alt="Mplify">
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <!-- NAVBAR -->
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="index.html">
                    <img src="<?php echo base_url(); ?>public/template/images/logo.png"
                         alt="Travel Haji &amp; Umroh Logo" class="img-responsive logo" style="height: 40px;">
                    <!-- <span class="name" style="display: block; white-space: normal; word-wrap: break-word;">
                        Travel Haji &amp; Umroh
                    </span> -->
                </a>
            </div>

            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas">
                                <i class="lnr lnr-menu fa fa-bars"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li>
                        <form id="navbar-search" class="navbar-form search-form">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        </form>
                    </li>
                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="javascript:void(0);" class="create_new icon-menu" title="Create New">Create New</a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="icon-bell"></i>
                                        <span class="notification-dot"></span>
                                    </a>
                                    <ul class="dropdown-menu animated bounceIn notifications">
                                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-warning"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                        <span class="timestamp">10:00 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-like text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                        <span class="timestamp">11:30 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-pie-chart text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                        <span class="timestamp">04:00 PM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Error on website analytics configurations</p>
                                                        <span class="timestamp">Yesterday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="fa fa-language"></i>
                                    </a>
                                    <ul class="dropdown-menu animated flipInX choose_language">
                                        <li><a href="javascript:void(0);">English</a></li>
                                        <li><a href="javascript:void(0);">French</a></li>
                                        <li><a href="javascript:void(0);">Spanish</a></li>
                                        <li><a href="javascript:void(0);">Portuguese</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/user-small.png" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="<?php echo base_url(); ?>assets/images/user-small.png" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>Samuel Morriss</h4>
                                                <p class="user-name">samuelmorris@info.com</p>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                                                <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                                <li class="divider"></li>
                                                <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SIDEBAR -->
    <div id="leftsidebar" class="sidebar">
        <div class="sidebar-scroll">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">Main</li>
                    <li class="<?= ($this->uri->segment(2)=='dashboard') ? 'active' : '' ?>">
                        <a href="dashboard">
                            <i class="icon-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="heading">App</li>
                    <li class="<?= in_array($this->uri->segment(2), ['paket_haji', 'paket_umroh', 'paket_wisata']) ? 'active' : '' ?>">
                        <a href="#" class="has-arrow">
                            <i class="fa fa-cubes"></i>
                            <span>Produk</span>
                        </a>
                        <ul>
                            <li class="<?= ($this->uri->segment(2)=='paket_haji') ? 'active' : '' ?>">
                                <a href="paket_haji">Paket Haji</a>
                            </li>
                            <li class="<?= ($this->uri->segment(2)=='paket_umroh') ? 'active' : '' ?>">
                                <a href="paket_umroh">Paket Umroh</a>
                            </li>
                            <li class="<?= ($this->uri->segment(2)=='paket_wisata') ? 'active' : '' ?>">
                                <a href="paket_wisata">Paket Wisata</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($this->uri->segment(2)=='pendaftaran') ? 'active' : '' ?>">
                        <a href="pendaftaran">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Pendaftaran</span>
                        </a>
                    </li>
                    <li class="<?= ($this->uri->segment(2)=='pemesanan') ? 'active' : '' ?>">
                        <a href="pemesanan">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Pemesanan</span>
                        </a>
                    </li>
                    <li class="<?= ($this->uri->segment(2)=='pembayaran') ? 'active' : '' ?>">
                        <a href="pembayaran">
                            <i class="fa fa-credit-card"></i>
                            <span>Pembayaran</span>
                        </a>
                    </li>
                    <li class="<?= ($this->uri->segment(2)=='artikel') ? 'active' : '' ?>">
                        <a href="artikel">
                            <i class="fa fa-file-text"></i>
                            <span>Artikel/Panduan</span>
                        </a>
                    </li>
                    <li class="<?= ($this->uri->segment(2)=='testimoni') ? 'active' : '' ?>">
                        <a href="testimoni">
                            <i class="fa fa-comments"></i>
                            <span>Testimoni</span>
                        </a>
                    </li>
                    <li class="<?= ($this->uri->segment(2)=='profil') ? 'active' : '' ?>">
                        <a href="profil">
                            <i class="fa fa-cog"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>login">
                            <i class="fa fa-power-off"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div id="main-content">
        <div class="container-fluid">
            <!-- Memuat konten partial -->
            <?php 
                if (isset($content)) {
                    $this->load->view($content);
                } else {
                    echo 'no-content'; 
                }
            ?>
        </div>
    </div>
</div>

<!-- Bundle JS Mplify -->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>public/assets/bundles/libscripts.bundle.js"></script> -->
<script src="<?php echo base_url(); ?>public/assets/bundles/vendorscripts.bundle.js"></script>

<!-- <script src="<?php echo base_url(); ?>public/assets/bundles/chartist.bundle.js"></script> -->
<script src="<?php echo base_url(); ?>public/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<!-- <script src="<?php echo base_url(); ?>public/assets/bundles/flotscripts.bundle.js"></script> flot charts Plugin Js  -->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/flot-charts/jquery.flot.selection.js"></script> -->

<script src="<?php echo base_url(); ?>public/assets/bundles/mainscripts.bundle.js"></script>
<!-- <script src="<?php echo base_url(); ?>public/assets/js/index.js"></script> -->

<script src="<?php echo base_url(); ?>public/assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<script src="<?php echo base_url(); ?>public/assets/bundles/morrisscripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/pages/tables/jquery-datatable.js"></script>
</body>
</html>