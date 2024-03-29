<?php
session_start();
require_once "app.php";

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>E-Jariyah | Charity Detail</title>
    <link rel="icon" href="<?= BASE_URL; ?>/img/kotak.png">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/CSS/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/CSS/WOW-master/css/libs/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
    <meta name="id_amal" content="<?php echo $id ?>">
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
    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8 konten" id="konten">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 GambarSatu" src="<?= BASE_URL; ?>/uploads/photos/5e8d4e19e23e5.png" alt="First slide">
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100 GambarDua" src="<?= BASE_URL; ?>/uploads/photos/5e8d4e19e23e5.png" alt="First slide">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <nav class="tab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="true">Detail</a>
                            <a class="nav-item nav-link" id="nav-donatur-tab" data-toggle="tab" href="#nav-donatur" role="tab" aria-controls="nav-donatur" aria-selected="false">Donatur</a>
                        </div>
                    </nav>

                    <div class="konten-detail">
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                <h2 class="text-center TitleAmal"></h2>
                                <p class="ContentAmal">Donatur Tetap</p>
                            </div>

                            <div class="tab-pane fade" id="nav-donatur" role="tabpanel" aria-labelledby="nav-donatur-tab">

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 custom-sidebar abs-bawah">
                    <div class="sidebar" style="background-color: #222;border: 1px solid #222;">
                        <h4 class="text-center TitleAmal"></h4>
                        <br>
                        <center>
                            <span class="tag"><a href="#">Pemberdayaan</a></span>
                        </center>
                        <div class="zakatsekarang">
                            <input type="hidden" name="_token" value="7pglCeEvEo2xBioncD7opPQEuRkpAw0kkRBMZGxS">
                            <fieldset>
                                <div class="input-group mb-3">
                                    <input type="text" autocomplete="off" class="form-control" id="namaDonatur" placeholder="Masukan Nama Anda">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" autocomplete="off" class="form-control" step="1000" min="0" id="jumlahDonasi" placeholder="Masukan Jumlah Amal" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                </div>
                                <div class="slidecontainer">
                                </div><br>
                                <textarea name="comment" class="form-control mb-3" rows="3" placeholder="Tulis doa/pesan/support-mu disini..." id="pesan"></textarea>
                                <button type="submit" class="btn btn-custom-inverse w-100" onclick="AmalSekarang()">
                                    AMAL
                                    SEKARANG
                                </button>

                            </fieldset>
                        </div>
                        <h4 class="text-center">Terkumpul</h4>
                        <h4 class="text-center Terkumpul"></h4>
                        <br>
                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2">dari <span class="Keseluruhan"></span> <br> <span class="Tanggat"></span> Hari lagi</div>
                            <div class="ml-auto p-2"><span class="progresAmal"></span>%</div>
                        </div><br>
                        <div class="uploader d-flex justify-content-between">
                            <div class="p2 d-flex align-flex-center">
                                <span class="">
                                    <img src="<?= BASE_URL; ?>/img/kotak.png" class="rounded-circle">
                                </span>
                                <span class="d-flex">
                                    <a href="#" class="align-flex-center align-self-center text-white">
                                        E-Jariyah
                                    </a>
                                </span>
                            </div>
                            <div class="line-card p2 d-flex align-self-center">
                            </div>
                            <div class="p2 d-flex">
                                <span class="icon-map d-flex">
                                    <i class="fa fa-map-marker fa-2x align-self-center"></i>
                                </span>
                                <span class="lokasi d-flex">
                                    <a href="#" class="justify-content-right text-white alamatAmal align-self-center"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="myAlert-minimal alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Kesalahan!</strong> Jumlah Donasi Minimal Rp 10.000
    </div>
    <div class="myAlert-ribuan alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Kesalahan!</strong> Mohon masukan angka dengan kelipatan ribuan.
    </div>


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

    <script src="<?= BASE_URL ?>/js/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>/js/jquery.mask.min.js"></script>
    <script src="<?= BASE_URL ?>/js/popper.min.js"></script>
    <script src="<?= BASE_URL ?>/js/wow.min.js"></script>
    <script src="<?= BASE_URL ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
    <script src="<?= BASE_URL ?>/JS/FormatMoney.js"></script>
    <script src="<?= BASE_URL ?>/JS/sweetalert2.all.min.js"></script>
    <script src="<?= BASE_URL ?>/js/amal.js"></script>
    <script src="<?= BASE_URL ?>/js/custom.js"></script>
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
        autonumericrp = {
            digitGroupSeparator: '.',
            decimalCharacter: ',',
            decimalPlaces: 0
        };
        var jumlahdonasi = new AutoNumeric('#jumlahdonasi', autonumericrp);

        $('#formtambahdonasi').submit(function(e) {
            if (jumlahdonasi.get() < 10000) {
                $(".myAlert-minimal").show();
                setTimeout(function() {
                    $(".myAlert-minimal").hide();
                }, 4000);
                e.preventDefault();
            } else if ((jumlahdonasi.get() % 1000) != 0) {
                $(".myAlert-ribuan").show();
                setTimeout(function() {
                    $(".myAlert-ribuan").hide();
                }, 4000);
                e.preventDefault();
            }

        });
    </script>

</body>

</html>