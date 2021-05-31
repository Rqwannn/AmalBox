<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">RidwanAmal</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li ><a href="index.html"><i class="menu-icon icon-dashboard"></i>Utama
                                </a></li>
                                <li class="active"><a href="donatur.html"><i class="menu-icon icon-inbox"></i>Dana Donatur<b class="label green pull-right">
                                    11</b> </a></li>
                                <li class="active"><a href="add-admin.html"><i class="menu-icon icon-dashboard"></i>Tambah Admin
                                </a></li>
                                <li class="active"><a href="add-amal.html"><i class="menu-icon icon-dashboard"></i>Tambah Amal
                                </a></li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65</b>
                                        <p class="text-muted">
                                            Jumlah Program</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                                        <p class="text-muted">
                                            Donatur</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Dana Terkumpul</p>
                                    </a>
                                </div>
                            </div>
                            <!--/.module-->
                    
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Tabel Data Donatur</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Nama Donatur
                                                </th>
                                                <th>
                                                    Jumlah Amal
                                                </th>
                                                <th>
                                                    Pesan
                                                </th>
                                                <th>
                                                    Waktu
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Junaedi
                                                </td>
                                                <td class="center">
                                                    200.000
                                                </td>
                                                <td>
                                                    semoga cepat sembuh
                                                </td>
                                                <td class="center">
                                                    01-15-21 00.00
                                                </td>
                                                <td>
                                                    <a href="#" class="btn small" id="check">
                                                        <i class="far fa-check-circle"></i>
                                                    </a>
                                                    <a href="#" class="btn small" id="delete">
                                                        <i class="fas fa-ban"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Nama Donatur
                                                </th>
                                                <th>
                                                    Jumlah Amal
                                                </th>
                                                <th>
                                                    Pesan
                                                </th>
                                                <th>
                                                    Waktu
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </tfoot>
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
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>