<?php

require_once "../app.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validation
    if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        $data = [
            "status" => false,
            "message" => "invalid data"
        ];

        echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
        $admin = tambahAdmin($_POST);
        echo json_encode($admin, JSON_PRETTY_PRINT);
    }
} else {
    echo "<h1>The page you looking for was not found</h1>";
}
