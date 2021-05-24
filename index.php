<?php

require_once "app.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="<?= BASE_URL ?>/img/icon.png">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/CSS/style.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>

    <title>AmalBox</title>
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

    <section class="banner">
        <div class="container">
            <div class="row align-items-center h-full">
                <div class="tengah col-lg-8 offset-lg-2">
                    <h3 class="text-center">TEBAR AMAL RAIH BERKAH</h3>
                    <div id="carouselContent" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active text-center p-4">
                                <p>
                                    “Dan pada harta benda mereka ada hak untuk orang miskin yang meminta dan orang miskin yang tidak meminta.” (Q.S. Adz-Dzariyat : 19)
                                </p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p>"Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka, dan mendoalah untuk mereka. Sesungguhnya doa kamu itu (menjadi) ketenteraman jiwa bagi mereka. Dan Allah Maha Mendengar lagi Maha Mengetahui."(QS. At-Tawbah [9]:103)</p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p>"Perumpamaan (nafkah yang dikeluarkan oleh) orang-orang yang menafkahkan hartanya di jalan Allah adalah serupa dengan sebutir benih yang menumbuhkan tujuh bulir, pada tiap-tiap bulir seratus biji. Allah melipat gandakan (ganjaran) bagi siapa yang Dia kehendaki. Dan Allah Maha Luas (karuniaNya) lagi Maha Mengetahui. "(QS. Al Baqarah [2]: 261)</p>
                            </div>

                            <div class="carousel-item text-center p-4">
                                <p>"Orang-orang yang menafkahkan hartanya di malam dan siang hari secara tersembunyi dan terang-terangan, maka mereka mendapat pahala di sisi Tuhannya. Tidak ada kekhawatiran terhadap mereka dan tidak (pula) mereka bersedih hati. "(QS. Al Baqarah [2]: 274)</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <center>
                        <a href="https://amalbox.org/amal" title="Hitung Zakat"> <button type="button" class="btn btn-custom wow fadeInRight">Beramal Sekarang</button></a>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <div style="background-color: #307184;">

        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 mt-5">
                    <img src="<?= BASE_URL; ?>/Img/icon.png" class="gambartengah" style="max-width: 120px;">
                    <p class="text-center mt-3 px24" style="color: #fff">
                        RidwanAmal merupakan platform online yang memudahkan masyarakat untuk beramal melalui berbagai pilihan program yang terseleksi, serta menggalang amal untuk mewujudkan inisiatif dan project sosial dalam ekosistem Islam.
                    </p>

                    <div class="container">
                        <div class="row pt-2 pb-5 justify-content-center">
                            <a href="<?= BASE_URL; ?>/about,php" title="Tentang AmalBox">
                                <button type="button" class="btn btnsec btn-custom-white wow pulse">Tentang RidwanAmal</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="garis">
        <span></span>
        <img src="<?= BASE_URL; ?>/Img/kotak.png">
    </div>

    <section class="programamal space-section">
        <div class="container">
            <h2 class="text-center mb-3">Program Amal</h2>


            <div class="owl-carousel owl-carousel3 owl-theme">

                <div class="item">
                    <div class="">
                        <div class="card">
                            <a href="#" title="">
                                <div class="card-image">
                                    <img class="img-fluid" src="<?= BASE_URL; ?>/uploads/photos/5e255d30da4ab.jpg" alt="Card image cap">
                                </div>
                            </a>
                            <span class="align-self-end tag"><a href="#">Pemberdayaan</a></span>
                            <div class="progress align-self-center">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-info">
                                <span class="text-left">
                                    Terkumpul <br>
                                    <b>Rp 0</b>
                                </span>
                                <span class="text-right ml-auto">
                                    <b>0%</b> Progress <br>
                                    <b>375</b> Hari Lagi
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="card-title ">
                                    <a href="<?= BASE_URL; ?>/amal.php">
                                        <h4 class="align-middle text-center">Rumah Tahfidz Sahabat Quran Ar Raheem </h4>
                                    </a>
                                </div>
                                <p class="card-text">Sebuah organiasi non profit yang
                                    bergerak di bidang pendidikan agama
                                    Islam dengan tujuan utamanya menghafal minimal 1 juz dalam 2 tahun</p>
                                <a href="<?= BASE_URL; ?>/amal.php" class="btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                                <div class="uploader d-flex justify-content-between">
                                    <div class="p2 d-flex align-flex-center">
                                        <span class="">
                                            <img src="<?= BASE_URL; ?>/img/icon.png" class="rounded-circle">
                                        </span>
                                        <span class="d-flex">
                                            <a href="#" class="align-flex-center align-self-center">AmalBox</a>
                                        </span>
                                    </div>
                                    <div class="line-card p2 d-flex align-self-center">
                                    </div>
                                    <div class="p2 d-flex">
                                        <span class="icon-map d-flex">
                                            <i class="fa fa-map-marker fa-2x align-self-center"></i>
                                        </span>
                                        <span class="lokasi d-flex">
                                            <a href="#" class="justify-content-right align-self-center">Jl. Apel 5, Sukamaju Baru, Kec. Tapos, Kota Depok, Jawa Barat 16455</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="">
                        <div class="card">
                            <a href="#" title="">
                                <div class="card-image">
                                    <img class="img-fluid" src="<?= BASE_URL; ?>/uploads/photos/5e8d4e19e23e5.png" alt="Card image cap">
                                </div>
                            </a>
                            <span class="align-self-end tag"><a href="#">Pemberdayaan</a></span>
                            <div class="progress align-self-center">
                                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-info">
                                <span class="text-left">
                                    Terkumpul <br>
                                    <b>Rp 3.000.000</b>
                                </span>
                                <span class="text-right ml-auto">
                                    <b>1%</b> Progress <br>
                                    <b>231</b> Hari Lagi
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="card-title ">
                                    <a href="#">
                                        <h4 class="align-middle text-center">Donatur Tetap subsidi UMKM CoVid19 </h4>
                                    </a>
                                </div>
                                <p class="card-text">Donatur Tetap</p>
                                <a href="<?= BASE_URL; ?>/amal.php" class="btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                                <div class="uploader d-flex justify-content-between">
                                    <div class="p2 d-flex align-flex-center">
                                        <span class="">
                                            <img src="<?= BASE_URL; ?>/img/icon.png" class="rounded-circle">
                                        </span>
                                        <span class="d-flex">
                                            <a href="#" class="align-flex-center align-self-center">AmalBox</a>
                                        </span>
                                    </div>
                                    <div class="line-card p2 d-flex align-self-center">
                                    </div>
                                    <div class="p2 d-flex">
                                        <span class="icon-map d-flex">
                                            <i class="fa fa-map-marker fa-2x align-self-center"></i>
                                        </span>
                                        <span class="lokasi d-flex">
                                            <a href="#" class="justify-content-right align-self-center">DKI Jakarta</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row padding-top-5 justify-content-center">
                <a href="<?= BASE_URL; ?>/all.php" class="btn btnsec btn-custom wow pulse">Program Lainnya</a>
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
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    </script>
    <script>
        $('.owl-carousel3').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>

</body>

</html>