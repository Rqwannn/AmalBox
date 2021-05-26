<?php

define("BASE_URL", "http://localhost/amalbox");
$db = mysqli_connect("localhost", "root", "", "amalbox");

function tambahDonatur($data)
{
    global $db;
    $namaDonatur = isset($data['nama_donatur']) ? $data['nama_donatur'] : null;
    $jmlAmal = $data['jml_amal'];
    $pesan = $data['pesan'];
    $idAmal = $data['id_amal'];

    // generate token
    $token = generateRandomString(20);

    $sql = "INSERT INTO tbl_donatur VALUE('','$namaDonatur','$jmlAmal','$pesan',null,'$idAmal', '$token','0')";


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
    $dana = $data["dana"];
    $alamat = $data["alamat"];

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
        $sql = "INSERT INTO tbl_amal VALUE('','$judul','$detail','0','$alamat','$tgl_mulai','$tgl_selesai','$dana','$imgName','$imgLainName','0')";

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

function editAmal($data)
{
    global $db;
    $idAmal = $data['id_amal'];
    $judul = $data['judul'];
    $detail = $data['detail'];
    $tgl_mulai = $data['tgl_mulai'];
    $tgl_selesai = $data['tgl_selesai'];
    $img_old = $data['old_img'];
    $img_lain_old = $data['old_img_lain'];
    $dana = $data["dana"];
    $alamat = $data["alamat"];
    $status = $data['selesai'];

    $success = true;
    $errorImg = '';
    $errorImgLain = '';

    // check if upload new img
    if ($_FILES['img']['size'] != 0) {
        $img = $_FILES['img'];
        // cek ekstensi
        if ($img['type'] != "image/jpeg" && $img['type'] != "image/jpg" && $img['type'] != "image/png") {
            $errorImg = "gambar harus berformat jpg,jpeg atau png";
            $success = false;
        }
    }
    // check if upload new img other
    if ($_FILES['img_lain']['size'] != 0) {
        $img_lain = $_FILES['img_lain'];
        // cek ekstensi
        if ($img_lain['type'] != "image/jpeg" && $img_lain['type'] != "image/jpg" && $img_lain['type'] != "image/png") {
            $errorImgLain = "gambar lain harus berformat jpg,jpeg atau png";
            $success = false;
        }
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
        // check if upload new img
        if ($_FILES['img']['size'] != 0) {
            // move img
            $imgTmp = $img['tmp_name'];
            $imgExtensionArr = explode(".", $img['name']);
            $imgExtension = $imgExtensionArr[count($imgExtensionArr) - 1];
            $imgName = "gambar-" . uniqid() . "-" . date("his") . "." . $imgExtension;
            move_uploaded_file($imgTmp, $moveLocation . "/" . $imgName);
            // unlink old img
            unlink($moveLocation . "/" . $img_old);
        } else {
            $imgName = $img_old;
        }

        // check if upload new img other
        if ($_FILES['img_lain']['size'] != 0) {
            // move img lain
            $imgLainTmp = $img_lain['tmp_name'];
            $imgLainExtensionArr = explode(".", $img_lain['name']);
            $imgLainExtension = $imgExtensionArr[count($imgLainExtensionArr) - 1];
            $imgLainName = "gambar-lain-" . uniqid() . "-" . date("his") . "." . $imgLainExtension;
            move_uploaded_file($imgLainTmp, $moveLocation . "/" . $imgLainName);
            // unlink img other
            unlink($moveLocation . "/" . $img_lain_old);
        } else {
            $imgLainName = $img_lain_old;
        }

        // insert data
        $sql = "UPDATE tbl_amal SET judul = '$judul', detail = '$detail',alamat = '$alamat',tgl_mulai = '$tgl_mulai',tgl_selesai = '$tgl_selesai',dana = '$dana',gambar = '$imgName',gambar_lain = '$imgLainName', `status` = '$status' WHERE id_amal = '$idAmal'";

        mysqli_query($db, $sql);
        $data = getAmal($idAmal);

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
    $sql = "SELECT * FROM tbl_amal WHERE `status` = '0'";
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
        $sql2 = "SELECT * FROM tbl_donatur WHERE id_amal = '$idAmal' AND `status` = '1'";
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

function submitAmal($data)
{
    global $db;
    $idDonatur = $data['id_donatur'];

    $sql = "SELECT tbl_amal.id_amal,tbl_donatur.id_donatur,tbl_amal.dana as dana_akhir,tbl_amal.terkumpul,tbl_donatur.jml_amal FROM tbl_donatur JOIN tbl_amal ON tbl_amal.id_amal = tbl_donatur.id_amal WHERE tbl_donatur.id_donatur = '$idDonatur'";

    $query = mysqli_query($db, $sql);
    if ($query) {
        $result = mysqli_fetch_assoc($query);
        $jmlAmal = $result['jml_amal'];
        $terkumpul = intval($result['terkumpul']) + intval($jmlAmal);
        $idAmal = $result['id_amal'];
        $danaAkhir = intval($result['dana_akhir']);

        // change amal status if dana = terkumpul
        $sqlUpdateAmal = "";
        if ($danaAkhir == $terkumpul || $danaAkhir < $terkumpul) {
            $sqlUpdateAmal = "UPDATE tbl_amal SET terkumpul = '$terkumpul', `status` = '1' WHERE id_amal = '$idAmal'";
        } else {
            $sqlUpdateAmal = "UPDATE tbl_amal SET terkumpul = '$terkumpul' WHERE id_amal = '$idAmal'";
        }

        if (mysqli_query($db, $sqlUpdateAmal)) {
            $sqlUpdateDonatur = "UPDATE tbl_donatur SET `status` = '1' WHERE id_donatur = '$idDonatur'";
            if (mysqli_query($db, $sqlUpdateDonatur)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function hapusAmal($data)
{
    global $db;
    $idAmal = $data['id_amal'];

    $result = getAmal($idAmal);
    if ($result) {
        $oldImg = $result['gambar'];
        $oldImgLain = $result['gambar_lain'];
        // unlink old image
        $moveLocation = "../uploads/photos";
        unlink($moveLocation . "/" . $oldImg);
        unlink($moveLocation . "/" . $oldImgLain);
        $sql = "DELETE FROM tbl_amal WHERE id_amal = '$idAmal'";
        mysqli_query($db, $sql);
        if (mysqli_affected_rows($db) > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function generateRandomString($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function tambahAdmin($data)
{
    global $db;
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];

    $success = true;
    $errEmail = "";
    $errUsername = "";
    $checkEmail = check("tbl_admin", "email", $email);
    $checkUsername = check("tbl_admin", "username", $username);

    $errors = [];

    if (!$checkEmail) {
        $success = false;
        $errEmail = "Email sudah terdaftar";
    }

    if (!$checkUsername) {
        $success = false;
        $errUsername = "Username sudah terdaftar";
    }

    if ($errEmail != "") $errors["email"] = $errEmail;
    if ($errUsername != "") $errors["username"] = $errUsername;

    if (!$success) {
        return [
            "status" => false,
            "message" => "Invalid Data",
            "errors" => $errors
        ];
    }

    $sql = "INSERT INTO tbl_admin VALUE('','$username','$email','$password')";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        return [
            "status" => false,
            "message" => "Failed Add Admin"
        ];
    }

    $lastId = mysqli_insert_id($db);
    $dataAdmin = getAdmin($lastId);

    return [
        "status" => true,
        "message" => "Success Add Admin",
        "data" => $dataAdmin
    ];
}

function check($tbl, $x, $y)
{
    global $db;
    $sql = "SELECT * FROM $tbl WHERE $x = '$y'";
    $query = mysqli_query($db, $sql);

    if (mysqli_fetch_assoc($query) != null) {
        return false;
    } else {
        return true;
    }
}

function getAdmin($id)
{
    global $db;
    $sql = "SELECT * FROM tbl_admin WHERE id_admin = '$id'";
    $query = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($query);
}
