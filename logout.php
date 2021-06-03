<?php

session_start();
require_once "app.php";

if (!isset($_SESSION['auth'])) {
    header("location:" . BASE_URL . "/login.php");
}

session_destroy();
header("location:" . BASE_URL . "/login.php");
