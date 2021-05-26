<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validation
    if (!isset($_POST['id_amal'])) {
        $data = [
            "status" => false,
            "message" => "invalid data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        $amal = hapusAmal($_POST);
        if ($amal) {
            $data = [
                "status" => true,
                "message" => "Sukses Hapus Amal"
            ];
        } else {
            $data = [
                "status" => false,
                "message" => "Gagal Hapus Amal"
            ];
        }
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
