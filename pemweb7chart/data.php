<?php
include 'db.php'; // Panggil koneksi database

$query = $koneksi->query("SELECT * FROM mahasiswa");

// Jika query gagal, tampilkan error
if (!$query) {
    die("Query gagal: " . $koneksi->error);
}

$data = [];
while ($row = $query->fetch_assoc()) {
    $data[] = $row;
}

// Set header agar output JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
