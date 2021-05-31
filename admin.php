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
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
                            <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Utama
                                </a></li>
                            <li><a href="donatur.html"><i class="menu-icon icon-inbox"></i>Dana Donatur<b class="label green pull-right">
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
                        <div class="module hide">
                            <div class="module-head">
                                <h3>
                                    Adjust Budget Range</h3>
                            </div>
                            <div class="module-body">
                                <div class="form-inline clearfix">
                                    <a href="#" class="btn pull-right">Update</a>
                                    <label for="amount">
                                        Price range:</label>
                                    &nbsp;
                                    <input type="text" id="amount" class="input-" />
                                </div>
                                <hr />
                                <div class="slider-range">
                                </div>
                            </div>
                        </div>
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Tabel Data Program</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
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
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>
                                                Trident
                                            </td>
                                            <td>
                                                Internet Explorer 4.0
                                            </td>
                                            <td>
                                                Win 95+
                                            </td>
                                            <td class="center">
                                                4
                                            </td>
                                            <td class="center">
                                                X
                                            </td>
                                            <td>
                                                Trident
                                            </td>
                                            <td>
                                                Internet Explorer 4.0
                                            </td>
                                            <td>
                                                <a href="#" class="btn small">
                                                    <i class="icon-edit"></i>
                                                </a>
                                                <a href="#" class="btn small">
                                                    <i class="icon-trash text-danger"></i>
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