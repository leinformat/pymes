<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define("ACCESS_KEY", "123456");

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

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