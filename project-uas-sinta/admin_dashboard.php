<?php
session_start();
if (!isset($_SESSION['admin'])) { exit("Akses Ditolak!"); }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background: #f9f9f9; 
            color: #333;
        }
        .welcome-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
            max-width: 600px;
            margin: 20px auto;
        }
        .admin-img {
            width: 200px;       
            height: 200px;       
            object-fit: cover;    
            border-radius: 50%;  
            border: 5px solid #1abc9c; 
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="welcome-box">
    <h2>Selamat Datang di Menu Utama Admin</h2>
    <p>Gunakan panel menu di sebelah kiri untuk menambah, melihat, atau menghapus data produk.</p>
    
    <img src="galeri/aku.jpeg" alt="Foto Admin" class="admin-img";">
</div>

</body>
</html>