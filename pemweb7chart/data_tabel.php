<?php
include 'db.php';

$query = $koneksi->query("SELECT nim, nama, jurusan, alamat FROM mahasiswa");

$data = [];
while ($row = $query->fetch_assoc()) {
    $data[] = $row;
}

// Jika data kosong, kembalikan array kosong untuk menghindari error
if (empty($data)) {
    echo json_encode([]);
} else {
    header('Content-Type: application/json');
    echo json_encode($data);
}
?>
