<?php
require_once "app.php"
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">

    <title>AmalBox</title>
    <link rel="icon" href="<?= BASE_URL; ?>/img/icon.png">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
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
    <section class="amal">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="sidebarlist">

                            <form id="filterasli" method="GET">
                                <h4 class="text-center"><i class="fa fa-filter"></i> Filter</h4>
                                <button type="submit" class="btn btn-custom-inverse w-100">TERAPKAN</button>
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
                            <div class="p-2">Daftar Program <b>1 - 2</b> dari <b>2</b></div>
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
                            <input type="text" class="form-control" name="cari" value="" placeholder="Aku ingin beramal...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>


                    <div class="col-lg-4">
                        <div class="card">
                            <a href="<?= BASE_URL; ?>/amal.php" title="">
                                <div class="card-image">
                                    <img class="img-fluid" src="<?= BASE_URL; ?>/uploads/photos/5e255d30da4ab.jpg" alt="Card image cap">
                                </div>
                            </a>
                            <span class="align-self-end tag"><a href="<?= BASE_URL; ?>/amal.php">Pemberdayaan</a></span>
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
                                <div class="card-title mb-3">
                                    <a href="<?= BASE_URL; ?>/amal.php">
                                        <h4 class="align-middle text-center">Rumah Tahfidz Sahabat Quran Ar Raheem</h4>
                                    </a>
                                </div>
                                <p class="card-text">Sebuah organiasi non profit yang
                                    bergerak di bidang pendidikan agama
                                    Islam dengan tujuan utamanya menghafal minimal 1 juz dalam 2 tahun</p>
                                <a href="<?= BASE_URL; ?>/amal.php" class="mt-3 btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                                <div class="uploader d-flex justify-content-between">
                                    <div class="p2 d-flex align-flex-center">
                                        <span class="d-flex">
                                            <img src="<?= BASE_URL; ?>/img/icon.png" class="rounded-circle align-flex-center align-self-center" style="width: 30px;height: 30px">
                                        </span>
                                        <span class="d-flex">
                                            <a href="#" class="align-flex-center align-self-center">AmalBox</a>
                                        </span>
                                    </div>
                                    <div class="line-card p2 d-flex align-self-center">
                                    </div>
                                    <div class="p2 d-flex" style="overflow: hidden;">
                                        <span class="icon-map d-flex">
                                            <i class="fa fa-map-marker fa-2x align-self-center" style="font-size: 20px;"></i>
                                        </span>
                                        <span class="lokasi">
                                            <a href="#" class="justify-content-right align-flex-center align-self-center">Jl. Apel 5, Sukamaju Baru, Kec. Tapos, Kota Depok, Jawa Barat 16455</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <a href="<?= BASE_URL; ?>/amal.php" title="">
                                <div class="card-image">
                                    <img class="img-fluid" src="<?= BASE_URL; ?>/uploads/photos/5e255d30da4ab.jpg" alt="Card image cap">
                                </div>
                            </a>
                            <span class="align-self-end tag"><a href="<?= BASE_URL; ?>/amal.php">Pemberdayaan</a></span>
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
                                <div class="card-title mb-3">
                                    <a href="<?= BASE_URL; ?>/amal.php">
                                        <h4 class="align-middle text-center">Rumah Tahfidz Sahabat Quran Ar Raheem</h4>
                                    </a>
                                </div>
                                <p class="card-text">Sebuah organiasi non profit yang
                                    bergerak di bidang pendidikan agama
                                    Islam dengan tujuan utamanya menghafal minimal 1 juz dalam 2 tahun</p>
                                <a href="<?= BASE_URL; ?>/amal.php" class="mt-3 btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                                <div class="uploader d-flex justify-content-between">
                                    <div class="p2 d-flex align-flex-center">
                                        <span class="d-flex">
                                            <img src="<?= BASE_URL; ?>/img/icon.png" class="rounded-circle align-flex-center align-self-center" style="width: 30px;height: 30px">
                                        </span>
                                        <span class="d-flex">
                                            <a href="#" class="align-flex-center align-self-center">AmalBox</a>
                                        </span>
                                    </div>
                                    <div class="line-card p2 d-flex align-self-center">
                                    </div>
                                    <div class="p2 d-flex" style="overflow: hidden;">
                                        <span class="icon-map d-flex">
                                            <i class="fa fa-map-marker fa-2x align-self-center" style="font-size: 20px;"></i>
                                        </span>
                                        <span class="lokasi">
                                            <a href="#" class="justify-content-right align-flex-center align-self-center">
                                                DKI Jakarta
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <script src="<?= BASE_URL; ?>/js/jquery.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/jquery.mask.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/popper.min.js"></script>
    <script src="<?= BASE_URL; ?>/JS/wow.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=".<?= BASE_URL; ?>/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src=".<?= BASE_URL; ?>/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
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