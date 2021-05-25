<?php

define("BASE_URL", "http://localhost/amalbox");
$db = mysqli_connect("localhost", "root", "", "amalbox");

function tambahDonatur($data)
{
    global $db;
    $namaDonatur = isset($data['nama_donatur']) ? $data['nama_donatur'] : null;
    $jmlAmal = $data['jml_amal'];
    $pesan = $data['pesan'];
    $tglAmal = $data['tgl_amal'];
    $idAmal = $data['id_amal'];

    $sql = "INSERT INTO tbl_donatur VALUE('','$namaDonatur','$jmlAmal','$pesan','$tglAmal','$idAmal', '0')";

    mysqli_query($db, $sql);
    $lastId = mysqli_insert_id($db);

    return getDonatur($lastId);
}

function getDonatur($id)
{
    global $db;
    $sql = "SELECT * FROM tbl_donatur WHERE id_donatur = '$id'";
    $query = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($query);
}

function getAmal($id)
{
    global $db;
    $sql = "SELECT * FROM tbl_amal WHERE id_amal = '$id'";
    $query = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($query);
}


function tambahAmal($data)
{
    global $db;
    $judul = $data['judul'];
    $detail = $data['detail'];
    $tgl_mulai = $data['tgl_mulai'];
    $tgl_selesai = $data['tgl_selesai'];
    $img = $_FILES['img'];
    $img_lain = $_FILES['img_lain'];

    $errorImg = '';
    $errorImgLain = '';
    $success = true;
    // cek ekstensi
    if ($img['type'] != "image/jpeg" && $img['type'] != "image/jpg" && $img['type'] != "image/png") {
        $errorImg = "gambar harus berformat jpg,jpeg atau png";
        $success = false;
    }

    if ($img_lain['type'] != "image/jpeg" && $img_lain['type'] != "image/jpg" && $img_lain['type'] != "image/png") {
        $errorImgLain = "gambar lain harus berformat jpg,jpeg atau png";
        $success = false;
    }

    $errors = [];
    if ($errorImg != "") {
        $errors["img"] = $errorImg;
    }
    if ($errorImgLain != "") {
        $errors["img_lain"] = $errorImgLain;
    }

    $data = [
        "success" => $success,
        "errors" => $errors
    ];

    if ($success) {
        $moveLocation = "../uploads/photos";
        // move img
        $imgTmp = $img['tmp_name'];
        $imgExtensionArr = explode(".", $img['name']);
        $imgExtension = $imgExtensionArr[count($imgExtensionArr) - 1];
        $imgName = "gambar-" . uniqid() . "-" . date("his") . "." . $imgExtension;
        move_uploaded_file($imgTmp, $moveLocation . "/" . $imgName);

        // move img lain
        $imgLainTmp = $img_lain['tmp_name'];
        $imgLainExtensionArr = explode(".", $img_lain['name']);
        $imgLainExtension = $imgExtensionArr[count($imgLainExtensionArr) - 1];
        $imgLainName = "gambar-lain-" . uniqid() . "-" . date("his") . "." . $imgLainExtension;
        move_uploaded_file($imgLainTmp, $moveLocation . "/" . $imgLainName);

        // insert data
        $sql = "INSERT INTO tbl_amal VALUE('','$judul','$detail','$tgl_mulai','$tgl_selesai','0','$imgName','$imgLainName')";

        mysqli_query($db, $sql);
        $lastId = mysqli_insert_id($db);
        $data = getAmal($lastId);

        $data = [
            "success" => true,
            "data" => $data
        ];

        return $data;
    } else {
        return $data;
    }
}

function getAllAmal()
{
    global $db;
    $sql = "SELECT * FROM tbl_amal";
    $query = mysqli_query($db, $sql);
    if ($query != null) {
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $data;
    } else {
        return null;
    }
}

function getDetailAmal($idAmal)
{
    global $db;
    $sql = "SELECT * FROM tbl_amal WHERE id_amal = '$idAmal'";
    $query = mysqli_query($db, $sql);
    $dataAmal = mysqli_fetch_assoc($query);

    if ($dataAmal != null) {
        $sql2 = "SELECT * FROM tbl_donatur WHERE id_amal = '$idAmal'";
        $query2 = mysqli_query($db, $sql2);
        $dataDonatur = mysqli_fetch_all($query2, MYSQLI_ASSOC);

        $data = [
            "success" => true,
            "message" => "Data Found",
            "data" => $dataAmal,
            "donatur" => $dataDonatur
        ];
    } else {
        $data = [
            "success" => false,
            "message" => "Data Not Found",
        ];
    }

    return $data;
}
