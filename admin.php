<?php
require_once "app.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Ridwan Amal</title>
    <link type="text/css" href="<?= BASE_URL; ?>/css/theme.css" rel="stylesheet">
    <link rel="icon" href="<?= BASE_URL ?>/img/icon.png">
    <link type="text/css" href="<?= BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?= BASE_URL; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?= BASE_URL; ?>/img/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/admin.css">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container align-items-center" style="min-height: 50px;">
                <a class="brand btn" href="index.html">RidwanAmal</a>
                <ul class="nav pull-right" style="margin: 15px 0;">
                    <li class="nav-user dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= BASE_URL; ?>/img/user.png" class="nav-avatar" />
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Your Profile</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled" style="list-style-type: none;padding:0;">
                            <li class="active"><a href="<?= BASE_URL; ?>/admin.php"><i class="menu-icon icon-dashboard"></i>Utama
                                </a></li>
                            <li><a href="<?= BASE_URL; ?>/donatur.php"><i class="menu-icon icon-inbox"></i>Dana Donatur<b class="label green pull-right">
                                        11</b> </a></li>
                            <li class=""><a href="<?= BASE_URL; ?>/add-admin.php"><i class="menu-icon icon-dashboard"></i>Tambah Admin
                                </a></li>
                            <li class=""><a href="<?= BASE_URL; ?>/add-amal.php"><i class="menu-icon icon-dashboard"></i>Tambah Amal
                                </a></li>
                            <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                        </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="col-md-9">
                    <div class="content">
                        <div class="btn-controls">
                            <div class="btn-box-row row-fluid">
                                <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b id="JumlahProgram">0</b>
                                    <p class="text-muted">
                                        Jumlah Program</p>
                                </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b id="Donatur">0</b>
                                    <p class="text-muted">
                                        Donatur</p>
                                </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b id="DanaTerkumpul">0</b>
                                    <p class="text-muted">
                                        Dana Terkumpul</p>
                                </a>
                            </div>
                        </div>
                        <!--/.module-->
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Tabel Data Program</h3>
                            </div>
                            <div class="contentTable my-5">
                                <table id="TableDataProgram" border="0" class="table table-hover table-resposive mt-4">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                Nama Program
                                            </th>
                                            <th>
                                                Alamat
                                            </th>
                                            <th>
                                                Terkumpul
                                            </th>
                                            <th>
                                                Target
                                            </th>
                                            <th>
                                                Mulai
                                            </th>
                                            <th>
                                                Akhir
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="BodySetAdmin">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/.module-->
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; 2021 Ridwan Amal </b>All rights reserved.
        </div>
    </div>
    <script src="<?= BASE_URL; ?>/JS/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/JS/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL ?>/JS/FormatMoney.js"></script>

    <script src="<?= BASE_URL; ?>/JS/common.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

</body>