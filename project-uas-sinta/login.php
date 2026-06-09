<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // Di database kita pakai teks biasa 'admin123'

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result) === 1) {
        $_SESSION['admin'] = $username;
        header("Location: admin_frame.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login Admin</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f0f2f5; margin: 0; }
        .login-box { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; width: 300px; }
        input { display: block; width: 100%; margin: 15px 0; padding: 12px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #2c3e50; color: white; border: none; padding: 12px; width: 100%; cursor: pointer; border-radius: 4px; font-weight: bold; }
        button:hover { background: #34495e; }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Login Admin</h2>
    <?php if(isset($error)) echo "<p style='color:red;'>Username / Password salah!</p>"; ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username (admin)" required>
        <input type="password" name="password" placeholder="Password (admin123)" required>
        <button type="submit" name="login">Masuk Dashboard</button>
    </form>
    <p style="margin-top: 20px;"><a href="index.php" style="color: #7f8c8d; text-decoration: none;">← Kembali ke Beranda</a></p>
</div>
</body>
</html>