<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_amal'])) {
        $getDetailAmal = getDetailAmal($_GET['id_amal']);

        echo json_encode($getDetailAmal, JSON_PRETTY_PRINT);
    } else {
        $data = [
            "success" => false,
            "message" => "Invalid Data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
