<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validation
    if (!isset($_POST['id_amal']) || !isset($_POST['selesai']) || !isset($_POST['judul']) || !isset($_POST['dana']) || !isset($_POST['alamat']) || !isset($_POST['detail']) || !isset($_POST['tgl_mulai']) || !isset($_POST['tgl_selesai']) || !isset($_POST['old_img']) || !isset($_POST['old_img_lain'])) {
        $data = [
            "status" => false,
            "message" => "invalid data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        $amal = editAmal($_POST);

        if ($amal != null) {
            if ($amal["success"]) {
                $data = [
                    "status" => true,
                    "message" => "Success Update Charity",
                    "data" => $amal['data']
                ];

                echo json_encode($data, JSON_PRETTY_PRINT);
            } else {
                $data = [
                    "status" => false,
                    "message" => "Failed Update Charity",
                    "errors" => $amal['errors']
                ];

                echo json_encode($data, JSON_PRETTY_PRINT);
            }
        }
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
