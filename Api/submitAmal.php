<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validation
    if (!isset($_POST['id_donatur'])) {
        $data = [
            "status" => false,
            "message" => "invalid data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        $amal = submitAmal($_POST);
        if ($amal) {
            $data = [
                "status" => true,
                "message" => "Sukses Submit Amal"
            ];
        } else {
            $data = [
                "status" => false,
                "message" => "Failed Submit Amal"
            ];
        }
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
