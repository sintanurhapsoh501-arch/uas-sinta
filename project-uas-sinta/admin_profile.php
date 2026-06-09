<?php
session_start();
if (!isset($_SESSION['admin'])) { exit("Akses Ditolak!"); }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px; background: #f9f9f9; color: #333;">
    <h2>Profil Mahasiswa Pengembang Aplikasi</h2>
    <p><strong>Nama:</strong> Sinta Nurhapsoh</p>
    <p><strong>NIM:</strong> 252505009</p>
    <p><strong>Kelas:</strong> SI 2 - R</p>
    <p><strong>Mata Kuliah:</strong> Pemrograman Web 1 (UAS Genap)</p>
    
</body>
</html>