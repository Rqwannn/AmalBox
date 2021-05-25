<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validation
    if (!isset($_POST['jml_amal']) || !isset($_POST['pesan']) || !isset($_POST['tgl_amal']) || !isset($_POST['id_amal'])) {
        $data = [
            "status" => false,
            "message" => "invalid data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        $amal = tambahDonatur($_POST);
        if ($amal != null) {
            $data = [
                "status" => true,
                "message" => "Success Add Donatur",
                "data" => $amal
            ];

            echo json_encode($data, JSON_PRETTY_PRINT);
        }
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
