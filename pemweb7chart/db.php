<?php
$host = "localhost";
$user = "root"; // Sesuaikan jika ada password
$pass = "";
$db   = "kampus";

$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi database
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
