<?php
// hapus untuk halaman mahasiswa
include("koneksi.php");
if (isset($_GET['id'])) {
    $kode = $_GET['id'];
    $sql = "DELETE FROM kegiatan_himatif WHERE id_kegiatan =$kode";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: admin.php?page=kegiatan');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
