CREATE TABLE brian_jasa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_paket VARCHAR(100) NOT NULL,
    harga INT NOT NULL,
    deskripsi TEXT NOT NULL,
    gambar VARCHAR(255) NOT NULL
);

INSERT INTO brian_jasa (nama_paket, harga, deskripsi, gambar) VALUES
('Paket Teman Mabar ML (Anti Toxic)', 15000, 'Teman mabar yang siap nge-back up, ga bakal chat "Yatim", dan selalu ngasih core item ke kamu.', 'mabar.jpg'),
('Jasa Dengerin Curhat Mantan', 25000, 'Siap mendengarkan tangisan dan penyesalanmu 1 jam full. Free tisu virtual.', 'curhat.jpg'),
('Rental Teman Kondangan / Pura-pura Pacar', 75000, 'Biar ga ditanya "Kapan nikah?" sama om/tante. Setup visual rapi dan wangi.', 'kondangan.jpg');
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin123');