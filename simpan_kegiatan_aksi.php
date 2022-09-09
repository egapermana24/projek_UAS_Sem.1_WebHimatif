<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $narasumber = $_POST['narasumber'];
    $biaya = $_POST['biaya'];
    $sql = "INSERT INTO kegiatan_himatif (judul_kegiatan, tempat_kegiatan, 
                        waktu_kegiatan, jumlah_peserta, narasumber, biaya_kegiatan)
            VALUES ('$judul', '$tempat', '$tanggal', '$jumlah', '$narasumber', '$biaya')";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: admin.php?page=kegiatan');
    } else {
        header('Location: admin.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
