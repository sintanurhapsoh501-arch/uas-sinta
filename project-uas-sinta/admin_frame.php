<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Panel Kontrol Admin - Anti Gabut</title>
    <style>
        body, html { margin: 0; padding: 0; height: 100%; overflow: hidden; font-family: Arial, sans-serif; }
        .header { height: 60px; background: #2c3e50; color: white; display: flex; align-items: center; justify-content: space-between; padding: 0 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .wrapper { display: flex; height: calc(100% - 60px); }
        .sidebar { width: 220px; background: #34495e; padding-top: 15px; }
        .sidebar a { display: block; color: #ecf0f1; padding: 15px 20px; text-decoration: none; font-weight: bold; border-bottom: 1px solid #2c3e50; }
        .sidebar a:hover { background: #1abc9c; color: white; }
        .content-frame { flex: 1; border: none; width: 100%; height: 100%; background: #f9f9f9; }
    </style>
</head>
<body>

<div class="header">
    <h2>Dashboard Utama Web Admin</h2>
    <span>Halo, Super Admin 👋</span>
</div>

<div class="wrapper">
    <div class="sidebar">
        <a href="admin_dashboard.php" target="konten_admin">Home Admin</a>
        <a href="crud_produk.php" target="konten_admin">Produk Jasa (CRUD)</a>
        <a href="admin_profile.php" target="konten_admin">Profile Mahasiswa</a>
        <a href="logout.php" style="background:#e74c3c; margin-top: 20px;">Keluar / Logout</a>
    </div>
    <iframe src="admin_dashboard.php" name="konten_admin" class="content-frame"></iframe>
</div>

</body>
</html>