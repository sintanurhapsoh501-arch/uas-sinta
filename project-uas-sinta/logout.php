<?php
session_start();
// Menghapus semua session login admin
session_destroy();

// Mengembalikan admin langsung ke halaman login setelah keluar
header("Location: login.php");
exit;
?>