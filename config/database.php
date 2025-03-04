<?php
$host = "localhost";
$user = "root"; // Default XAMPP user
$pass = ""; // Default XAMPP password kosong
$db   = "irdo";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
