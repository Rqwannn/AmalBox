<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $donatur = getAllDonatur($_GET);
    if ($donatur != null) {
        $data = [
            "success" => true,
            "message" => "Donatur Found it",
            "data" => $donatur
        ];
    } else {
        $data = [
            "success" => false,
            "message" => "Donatur Not Found"
        ];
    }

    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
