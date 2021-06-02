<?php
require_once "app.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="<?= BASE_URL; ?>/css/theme.css" rel="stylesheet">
    <title>Add Amal | Ridwan Amal</title>
    <link rel="icon" href="<?= BASE_URL ?>/img/icon.png">
    <link type="text/css" href="<?= BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?= BASE_URL; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?= BASE_URL; ?>/img/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/admin.css">
    <link type=" text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
                            <li><a href="<?= BASE_URL; ?>/admin.php"><i class="menu-icon icon-dashboard"></i>Utama
                                </a></li>
                            <li><a href="<?= BASE_URL; ?>/donatur.php"><i class="menu-icon icon-inbox"></i>Dana Donatur<b class="label green pull-right">
                                        11</b> </a></li>
                            <li class=""><a href="<?= BASE_URL; ?>/add-admin.php"><i class="menu-icon icon-dashboard"></i>Tambah Admin
                                </a></li>
                            <li class="active"><a href="<?= BASE_URL; ?>/add-amal.php"><i class="menu-icon icon-dashboard"></i>Tambah Amal
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
                        <div class="form-horizontal btn-box row-fluid text-left">
                            <div class="row px-5">
                                <div class="control col-md-6 mb-3">
                                    <label class="label" for="basicinput">Nama Program</label>
                                    <div class="controls">
                                        <input type="text" id="NamaProgram" placeholder="Nama Program" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="control-label" for="basicinput">Alamat/Lokasi</label>
                                    <div class="controls">
                                        <input type="text" id="alamat" placeholder="Alamat / Lokasi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3 ">
                                    <label class="control-label" for="basicinput">Target Terkumpul</label>
                                    <div class="controls">
                                        <input type="text" id="TargetTerkumpul" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Rp." class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="control-label" for="basicinput">Waktu Mulai</label>
                                    <div class="controls">
                                        <input type="text" id="WaktuMulai" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="control-label" for="basicinput">Waktu Akhir</label>
                                    <div class="controls">
                                        <input type="text" id="WaktuAkhir" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="control-label" for="basicinput">Gambar 1</label>
                                    <div class="controls">
                                        <input type="file" id="Gambar1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="control-label" for="basicinput">Gambar 2</label>
                                    <div class="controls">
                                        <input type="file" id="Gambar2" class="form-control">
                                    </div>
                                </div>
                                <div class="control col-md-12">
                                    <label class="control-label" for="basicinput">Detail</label>
                                    <div class="controls">
                                        <textarea class="form-control" id="Detail" rows="5" style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" onclick="TambahAmal()" type="submit" style="margin-top: 20px;">Tambah</button>
                                </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/js/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/js/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?= BASE_URL; ?>/JS/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL ?>/JS/FormatMoney.js"></script>
    <script src="<?= BASE_URL; ?>/js/common.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

</body>