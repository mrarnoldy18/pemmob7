CREATE DATABASE IF NOT EXISTS kampus;
USE kampus;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(15),
    nama VARCHAR(100),
    jurusan VARCHAR(50),
    alamat TEXT,
    jumlah INT
);

INSERT INTO mahasiswa (nim, nama, jurusan, alamat, jumlah) VALUES
('20241001', 'Andi Saputra', 'Teknik Informatika', 'Surabaya', 120),
('20241002', 'Budi Santoso', 'Sistem Informasi', 'Malang', 90),
('20241003', 'Citra Dewi', 'Manajemen Informatika', 'Sidoarjo', 75),
('20241004', 'Dian Rahma', 'Desain Komunikasi Visual', 'Gresik', 50);
