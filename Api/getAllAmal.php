<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $amal = getAllAmal();
    if ($amal != null) {
        $data = [
            "success" => true,
            "message" => "Charity Found it",
            "data" => $amal
        ];
    } else {
        $data = [
            "success" => false,
            "message" => "Charity Not Found"
        ];
    }

    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
