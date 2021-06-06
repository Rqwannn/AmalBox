<?php
session_start();
require_once "app.php"
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">

    <title>E-Jariyah | All Charity</title>
    <link rel="icon" href="<?= BASE_URL; ?>/img/kotak.png">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="giftunggu"></div>
    <nav class="navbar fixed-top navbar-dark opaque" style="background-color: #011F37;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL; ?>">
                <div style="font-size: 35px;   font-family: system-ui, -apple-system, ' Segoe UI', Roboto, 'Helvetica Neue' , Arial, 'Noto Sans' , sans-serif, 'Apple Color Emoji' , 'Segoe UI Emoji' , 'Segoe UI Symbol' , 'Noto Color Emoji' ; color: #fff">
                    <img src="<?= BASE_URL; ?>/img/icon2.png" alt="">
                </div>
            </a>
            <div class="btnzakatamal btnhead mr-auto">
                <a href="<?= BASE_URL; ?>/all.php"><button class="p2 btn btn-custom-white" type="button">Amal</button></a>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample04">
                <div class="btnzakatamal btncol" style="background-color: #011F37;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL; ?>/all.php">Amal Lainnya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL; ?>/login.php">Login As Admin</a>
                        </li>
                    </ul>
                </div>

            </div>
    </nav>

    <span class="spaceheader"></span>
    <section class="amal">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="sidebarlist">

                            <form id="filterasli" method="GET">
                                <h4 class="text-center"><i class="fa fa-filter"></i> Filter</h4>
                                <button type="submit" class="btn btn-custom-white w-100">TERAPKAN</button>
                                <br><br>
                                <a class="w-100" data-toggle="collapse" data-target="#asnaf" aria-expanded="true" aria-controls="asnaf">
                                    <b>Kategori Program</b>
                                    <i class="float-right fa" aria-hidden="true"></i>
                                </a>
                                <div id="asnaf" class="ml-4 collapse show">

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="category[]" value="A0" class="form-check-input" value="">Pembangunan
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="category[]" value="A1" class="form-check-input" value="">Gerakan
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="category[]" value="A2" class="form-check-input" value="">Pemberdayaan
                                        </label>
                                    </div>
                                </div>

                                <br>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 listcard">
                    <h2>Sedekah Bawa Berkah Untuk Semua</h2>
                    <h3>#SedekahBerkah</h3>

                    <form id="filter" method="GET">
                        <div class="d-flex">
                            <div class="p-2">Daftar Program <b class="DataWeb">0</b> dari <b class="DataBase">0</b></div>
                            <div class="ml-auto p-2">
                                <div class="col-auto">
                                    <select id="selecfilter" class="custom-select mr-sm-2" name="urutkan">

                                        <option value="sesuai" selected>Paling sesuai</option>
                                        <option value="terpopuler">Terpopuler</option>
                                        <option value="hampir_berhasil">Hampir berhasil</option>
                                        <option value="kurang_dana">Kurang dana</option>
                                        <option value="hampir_berakhir">Hampir Berakhir</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <input type="text" class="form-control" id="cariJudulAmal" name="cari" value="" placeholder="Aku ingin beramal...">
                        </div>
                    </form>
                    <br>

                    <div class="getAmal2">

                    </div>

                </div>
                <div class="container">
                    <nav class="d-block w-100 mt-4">
                        <center>

                        </center>

                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="garis">
        <span></span>
        <img src="<?= BASE_URL; ?>/Img/kotak.png">
    </div>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-about wow fadeInUp">
                        <img class="logo-footer" src="<?= BASE_URL; ?>/img/kotak.png" alt="logo-footer" data-at2x="<?= BASE_URL; ?>/img/kotak.png">
                        <p>
                            E-Jariyah merupakan marketplace untuk beramal yang berkomitmen dalam membantu menggalang dan menyalurkan amal
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-5 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p><i class="fa fa-map-marker"></i> Jl. Tapos</p>
                        <p><i class="fa fa-phone"></i> Phone: 021 1234 1234</p>
                        <p><i class="fa fa-envelope"></i> Email: <a href="#">info@RidwanAmal.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex">
                    <div class="p2 footer-copyright">
                        Copyright &copy; 2021 - Muhammad Ridwan
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>

    <script src="<?= BASE_URL; ?>/js/jquery.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/jquery.mask.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/popper.min.js"></script>
    <script src="<?= BASE_URL; ?>/JS/wow.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=".<?= BASE_URL; ?>/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src=".<?= BASE_URL; ?>/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
    <script src="<?= BASE_URL ?>/JS/FormatMoney.js"></script>
    <script src="<?= BASE_URL; ?>/js/custom.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').removeClass('opaque');
                $('.btnhead').removeClass('dis-none');
            } else {
                $('.navbar').addClass('opaque');
            }
        });
    </script>


    <script>
        $('#filterasli').submit(function(e) {
            //e.preventDefault();

            $('#filter :input').not(':submit, select').clone().hide().appendTo('#filterasli');
            $('<input />').attr('type', 'hidden')
                .attr('name', "urutkan")
                .attr('value', $('#selecfilter option:selected').val())
                .appendTo('#filterasli');
        })
        $('#selecfilter').change(function(e) {
            $('#filterasli').submit();
        });

        $('#filter').submit(function(e) {
            e.preventDefault();
            $('#filterasli').submit();
        });
    </script>
</body>

</html>