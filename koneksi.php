<?php
// Mengatur data koneksi
$host = "localhost"; // Alamat server MySQL (biasanya localhost) 
$user = "root"; // Username MySQL (default: root)
$pass = ""; // Password MySQL (default kosong)
$dbname = "blajar_php_kelas_c"; // Nama database 

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek apakah koneksi berhasil 
if (!$conn) {
    die("koneksi eror:" . mysqli_connect_error());
}
echo "koneksi Succes!";
?>
