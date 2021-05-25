<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validation
    if (!isset($_POST['judul']) || !isset($_POST['detail']) || !isset($_POST['tgl_mulai']) || !isset($_POST['tgl_selesai']) || $_FILES['img']['size'] == 0 || $_FILES['img_lain']['size'] == 0) {
        $data = [
            "status" => false,
            "message" => "invalid data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        $amal = tambahAmal($_POST);

        if ($amal != null) {
            if ($amal["success"]) {
                $data = [
                    "status" => true,
                    "message" => "Success Add New Charity",
                    "data" => $amal['data']
                ];

                echo json_encode($data, JSON_PRETTY_PRINT);
            } else {
                $data = [
                    "status" => false,
                    "message" => "Failed Add New Charity",
                    "errors" => $amal['errors']
                ];

                echo json_encode($data, JSON_PRETTY_PRINT);
            }
        }
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
