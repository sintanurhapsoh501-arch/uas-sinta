<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Anti Gabut Premium - Rental Teman</title>
    <style>
        body { font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #f4f6f9; }
        header { background: #34495e; color: white; padding: 30px; text-align: center; }
        nav { background: #2c3e50; padding: 12px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #1abc9c; }
        .container { padding: 25px; max-width: 1100px; margin: auto; background: white; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .grid-produk { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 25px; }
        .card { border: 1px solid #e1e8ed; border-radius: 8px; padding: 20px; text-align: center; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
        .card img { max-width: 100%; height: 160px; object-fit: cover; border-radius: 6px; background-color: #ddd; }
        .btn { display: inline-block; background: #e74c3c; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 15px; font-weight: bold; }
        .btn:hover { background: #c0392b; }
        footer { text-align: center; padding: 20px; background: #2c3e50; color: white; margin-top: 50px; }
    </style>
    <script>
        function selamatDatang() {
            alert("Halo Bestie! Selamat datang di Website Jasa Anti Gabut Premium ✨");
        }
        function sewaJasa(namaJasa) {
            alert("Kamu memilih: " + namaJasa + "\nPesanan diproses! Talent kami sedang otw chat kamu.");
        }
    </script>
</head>
<body onload="selamatDatang()">

<header>
    <h1>🎭 ANTI GABUT PREMIUM 🎭</h1>
    <p>Solusi Ampuh Buat Remaja yang Kurang Asupan Perhatian dan Teman Mabar</p>
</header>

<nav>
    <a href="#home">Home</a>
    <a href="#produk">Katalog Jasa</a>
    <a href="#profil">Profil Perusahaan</a>
    <a href="#testi">Testimoni Bebas</a>
    <a href="login.php">Login Admin</a>
</nav>

<div class="container">
    <section id="home">
        <h2>Selamat Datang di Portal Anti Kesepian</h2>
        <p>Daripada malam minggu cuma bengong mandangin status WA mantan, mending sewa jasa seru di sini. Dijamin hari-harimu jadi lebih berwarna!</p>
        
        <h3>Tonton Video Seru Kami:</h3>
        <video width="100%" height="320" controls>
            <source src="vidio/video.mp4" type="video/mp4">
        </video>
        
        <p>Sambil browsing, dengerin sound aesthetic ini dulu:</p>
        <audio controls>
            <source src="musik/musik.mp3" type="audio/mpeg">
        </audio>
    </section>

    <hr style="margin: 40px 0; border: 0; border-top: 1px solid #eee;">

    <section id="produk">
        <h2>Katalog Jasa Terlaris (Real-time dari Database)</h2>
        <div class="grid-produk">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM brian_jasa");
            while($data = mysqli_fetch_array($query)) {
            ?>
            <div class="card">
                <img src="assets/<?php echo $data['gambar']; ?>" alt="<?php echo $data['nama_paket']; ?>" onerror="this.src='https://via.placeholder.com/280x160?text=Foto+Jasa';">
                <h3><?php echo $data['nama_paket']; ?></h3>
                <p style="color: #27ae60; font-size: 1.2em; font-weight: bold;">Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></p>
                <p style="color: #666; font-size: 0.9em;"><?php echo $data['deskripsi']; ?></p>
                <a href="#" class="btn" onclick="sewaJasa('<?php echo $data['nama_paket']; ?>')">Sewa Sekarang 🚀</a>
            </div>
            <?php } ?>
        </div>
    </section>

    <hr style="margin: 40px 0; border: 0; border-top: 1px solid #eee;">

    <section id="profil">
        <h2>Profil PT. Sinar Remaja Ceria</h2>
        <p>Kami adalah startup yang bergerak di bidang penyelamatan mental remaja dari serangan bosan dan overthinking tingkat komplek.</p>
        <h3>Kenapa Harus Sewa di Kami?</h3>
        <ol>
            <li><strong>Anti Ghosting:</strong> Talent kami ramah dan ga bakal ngilang pas lagi sayang-sayangnya.</li>
            <li><strong>Harga Pelajar:</strong> Murah meriah, ga bikin kantong jebol, pas buat jatah uang jajan seminggu.</li>
            <li><strong>Amanah:</strong> Privasi kamu terjamin 100% aman dari gibahan tetangga.</li>
        </ol>
    </section>

    <hr style="margin: 40px 0; border: 0; border-top: 1px solid #eee;">

    <section id="testi">
        <h2>Kata Mereka yang Udah Tobat Gabut</h2>
        <ul>
            <li><em>"Kemarin sewa teman mabar ML, beneran digendong sampai Mythic! Mantap parah."</em> - @cinta_mabar</li>
            <li><em>"Jasa curhatnya ngebantu banget pas lagi pusing mikirin tugas pemrograman web ini, wkwk."</em> - @sinta_curhat</li>
        </ul>
        <p>Info selengkapnya? Kepoin Instagram Saya: <a href="https://instagram.com/sntnrhaps_" target="_blank">@sntnrhaps_</a></p>
    </section>
</div>

<footer>
    <p>Copyright &copy; 2026 UAS Pemrograman Web - Universitas Ma'soem</p>
</footer>

</body>
</html>