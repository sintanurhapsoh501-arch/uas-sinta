<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['admin'])) { exit("Akses Ditolak!"); }

// Proses Create (Tambah Data)
if (isset($_POST['tambah'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_paket']);
    $harga = $_POST['harga'];
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
    
    mysqli_query($conn, "INSERT INTO brian_jasa VALUES ('', '$nama', '$harga', '$deskripsi', '$gambar')");
    header("Location: crud_produk.php");
}

// Proses Delete (Hapus Data)
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM brian_jasa WHERE id=$id");
    header("Location: crud_produk.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f9f9f9; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        table, th, td { border: 1px solid #cbd5e1; padding: 12px; text-align: left; }
        th { background: #34495e; color: white; }
        .form-box { background: white; padding: 20px; border: 1px solid #cbd5e1; border-radius: 6px; max-width: 500px; }
        .form-control { display: block; width: 100%; margin-bottom: 12px; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn-add { background: #2ecc71; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>

<h2>Kelola Data Katalog Jasa (CRUD)</h2>

<div class="form-box">
    <h3>Tambah Jasa Baru</h3>
    <form action="" method="POST">
        <input type="text" name="nama_paket" placeholder="Nama Paket Jasa Baru" class="form-control" required>
        <input type="number" name="harga" placeholder="Harga Jasa (Angka)" class="form-control" required>
        <textarea name="deskripsi" placeholder="Deskripsi Jasa unik kamu..." class="form-control" rows="3" required></textarea>
        <input type="text" name="gambar" placeholder="Nama file gambar (misal: mabar3.jpg)" class="form-control" required>
        <button type="submit" name="tambah" class="btn-add">+ Simpan Jasa</button>
    </form>
</div>

<h3>Daftar Jasa yang Tersedia Saat Ini</h3>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jasa</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Nama File Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM brian_jasa");
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><strong><?php echo $row['nama_paket']; ?></strong></td>
            <td>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $row['deskripsi']; ?></td>
            <td>`<?php echo $row['gambar']; ?>`</td>
            <td>
                <a href="crud_produk.php?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Kamu yakin mau menghapus paket jasa ini?')" style="color:#e74c3c; font-weight:bold; text-decoration:none;">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>