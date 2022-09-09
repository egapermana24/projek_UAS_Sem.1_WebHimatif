<?php
// mengaktifkan session pada php
session_start();
//  menguhubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db, "SELECT * FROM user_nim WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    // cek jika user login sebagai admin
    if ($data['level'] == "1") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin.php?page=beranda");
    } else {
        // alihkan ke halaman login kembali
        header("location:admin.php?pesan=gagal");
    }
} else {
    header("location:admin.php?pesan=gagal");
}
