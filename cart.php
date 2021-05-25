<?php
require_once "app.php";
?>

<!DOCTYPE html>
<html lang="id">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AmalBox</title>
    <link rel="icon" href="<?= BASE_URL ?>/img/icon.png">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/style.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="giftunggu"></div>
    <nav class="navbar fixed-top navbar-light bg-light opaque">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center justify-content-center" href="/">
                <div style="font-size: 35px;   font-family: system-ui, -apple-system, ' Segoe UI', Roboto, 'Helvetica Neue' , Arial, 'Noto Sans' , sans-serif, 'Apple Color Emoji' , 'Segoe UI Emoji' , 'Segoe UI Symbol' , 'Noto Color Emoji' ; color: #53657D">
                    RidwanAmal
                </div>
            </a>
            <div class="btnzakatamal btnhead mr-auto">
                <a href="<?= BASE_URL; ?>/all.php"><button class="p2 btn btn-custom" type="button">Amal</button></a>
            </div>
            <a href="<?= BASE_URL; ?>/cart.php" title="Kotak Amal">
                <div class="kotakamal">
                    5
                </div>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample04">
                <div class="btnzakatamal btncol">
                    <a href="https://amalbox.org/zakat" title=""><button class="p2 btn btn-custom" type="button">Zakat</button></a>
                    <a href="https://amalbox.org/amal"><button class="p2 btn btn-custom" type="button">Amal</button></a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang ZIS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://partner.amalbox.org">Galang Amal</a>
                        </li>
                    </ul>
                </div>

            </div>
    </nav>

    <span class="spaceheader"></span>

    <style type="text/css" media="screen">
        .design-process-section .text-align-center {
            line-height: 25px;
            margin-bottom: 12px;
        }

        .design-process-content {
            border: 1px solid #e9e9e9;
            position: relative;
            padding: 16px 34% 30px 30px;
        }

        .design-process-content img {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            max-height: 100%;
        }

        .design-process-content h3 {
            margin-bottom: 16px;
        }

        .design-process-content p {
            line-height: 26px;
            margin-bottom: 12px;
        }

        .process-model {
            list-style: none;
            padding: 0;
            position: relative;
            max-width: 600px;
            margin: 20px auto 26px;
            border: none;
            z-index: 0;
        }

        .process-model li::after {
            background: #e5e5e5 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            display: block;
            height: 4px;
            margin: 0 auto;
            position: absolute;
            right: 50px;
            top: 33px;
            width: 80%;
            z-index: -1;
        }

        .process-model li.visited::after {
            background: #3BABA3;
        }

        .process-model li:last-child::after {
            width: 0;
        }

        .process-model li {
            display: inline-block;
            width: 25%;
            text-align: center;
            float: none;
        }

        .nav-tabs.process-model>li.active>a,
        .nav-tabs.process-model>li.active>a:hover,
        .nav-tabs.process-model>li.active>a:focus,
        .process-model li a:hover,
        .process-model li a:focus {
            border: none;
            background: transparent;

        }

        .process-model li a {
            padding: 0;
            border: none;
            color: #606060;
        }

        .process-model li.active,
        .process-model li.visited {
            color: #3BABA3;
        }

        .process-model li.active a,
        .process-model li.active a:hover,
        .process-model li.active a:focus,
        .process-model li.visited a,
        .process-model li.visited a:hover,
        .process-model li.visited a:focus {
            color: #3BABA3;
        }

        .process-model li.active p,
        .process-model li.visited p {
            font-weight: 600;
        }

        .process-model li i {
            display: block;
            height: 68px;
            width: 68px;
            text-align: center;
            margin: 0 auto;
            background: #f5f6f7;
            border: 2px solid #e5e5e5;
            line-height: 65px;
            font-size: 30px;
            border-radius: 50%;
        }

        .process-model li.active i,
        .process-model li.visited i {
            background: #fff;
            border-color: #3BABA3;
        }

        .process-model li p {
            font-size: 14px;
            margin-top: 11px;
        }

        .process-model.contact-us-tab li.visited a,
        .process-model.contact-us-tab li.visited p {
            color: #606060 !important;
            font-weight: normal
        }

        .process-model.contact-us-tab li::after {
            display: none;
        }

        .process-model.contact-us-tab li.visited i {
            border-color: #e5e5e5;
        }



        @media screen and (max-width: 560px) {
            .more-icon-preocess.process-model li span {
                font-size: 23px;
                height: 50px;
                line-height: 46px;
                width: 50px;
            }

            .more-icon-preocess.process-model li::after {
                top: 24px;
            }
        }

        @media screen and (max-width: 380px) {
            .process-model li i {
                width: 40px;
                height: 40px;
                line-height: 35px;
                font-size: 20px;
            }
        }
    </style>
    <section class="design-process-section" id="process-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                        <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>
                                <p>Kotak Amal</p>
                            </a></li>
                        <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                <p>Pembayaran</p>
                            </a></li>
                        <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fa fa-user-o"></i>
                                <p>Identitas</p>
                            </a></li>
                        <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab"><i class="fa fa-check-square-o"></i>
                                <p>Selesai</p>
                            </a></li>
                    </ul>
                </div>
            </div>
    </section>
    <div style="min-height: 600px;">

        <section class="kotakamal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <div class="p-2"><img src="assets/img/kotak.png" width="40" alt=""></div>
                            <div class="p-2">
                                <h2>Isi Kotak Amal & Zakat</h2>
                            </div>
                        </div>
                        <div class="box">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-sm table-bordered">
                                    <tbody>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="kotakamal">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="d-flex flex-row align-content-center justify-content-around text-center">
                                <div class="p-2"><img src="<?= BASE_URL; ?>/img/iconamal.png" height="120" alt=""></div>
                                <div class="p-2">
                                    <h4>Total Amal</h4>
                                    <h2>Rp. 0</h2><a href="amal.html" class="btn btn-custom w-100">Tambah Amal</a><br>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="kotakamal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h4 class="text-center">Total amal dan zakat yang akan disalurkan</h4>
                        <h3 class="font-weight-bold text-center">Rp. 0</h3><br>
                        <div class="d-flex flex-wrap">
                            <div class="ml-auto p-2">
                                <div class="p-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="myAlert-zakat-kurant alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Perhatian!</strong> Mohon tambahkan program zakat untuk menunaikan zakat sisa zakat anda sebesar Rp.0
        </div>

    </div>



    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-about wow fadeInUp">
                        <img class="logo-footer" src="<?= BASE_URL; ?>/img/icon.png" alt="logo-footer" data-at2x="<?= BASE_URL; ?>/img/icon.png">
                        <p>
                            RidwanAmal merupakan marketplace untuk beramal yang berkomitmen dalam membantu menggalang dan menyalurkan amal
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-5 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p><i class="fa fa-map-marker"></i> Jl. Pahlawan Revolusi No.41 Jakarta</p>
                        <p><i class="fa fa-phone"></i> Phone: 021 2208 6938</p>
                        <p><i class="fa fa-envelope"></i> Email: <a href="mailto:hello@amalbox.org">info@amalbox.org</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex">
                    <div class="p2 footer-copyright">
                        Copyright &copy; 2021 - Muhammad Ibnu
                    </div>
                    <div class="ml-auto p2 footer-social">
                        <a href="http://facebook.com/amalboxorg" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a href="http://twitter.com/amalboxorg" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="http://instagram.com/amalboxorg" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL ?>/JS/popper.min.js"></script>
    <script src="<?= BASE_URL ?>/JS/wow.min.js"></script>
    <script src="<?= BASE_URL ?>/JS/bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>/JS/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
    <script src="<?= BASE_URL ?>/JS/custom.js"></script>
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
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('#btnselanjutnya').click(function(e) {


        });
    </script>

</body>


</html>