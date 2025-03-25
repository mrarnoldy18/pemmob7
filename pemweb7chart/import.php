<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kampus";

$koneksi = new mysqli($host, $user, $pass);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Baca file SQL
$sqlFile = "mahasiswa.sql";
$sql = file_get_contents($sqlFile);

// Eksekusi SQL
if ($koneksi->multi_query($sql)) {
    echo "✅ Database berhasil diimport!";
} else {
    echo "❌ Gagal import: " . $koneksi->error;
}

$koneksi
