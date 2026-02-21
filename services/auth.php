<?php
 require_once './services/session.php';

define("ACCESS_KEY", "123456");

// Handle login
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["clave"])) {

    $clave = $_POST["clave"] ?? '';

    if ($clave === ACCESS_KEY) {
        $_SESSION["auth"] = true;
        session_regenerate_id(true); // security improvement
    } else {
        $error = "Invalid access key.";
    }
}

// Guard: block access if not authenticated
if (empty($_SESSION["auth"])) {
    require './login.php';
    exit;
}