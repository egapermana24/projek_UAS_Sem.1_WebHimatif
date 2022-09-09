<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $narasumber = $_POST['narasumber'];
    $biaya = $_POST['biaya'];
    $sql = "UPDATE kegiatan_himatif SET
                        judul_kegiatan      ='$judul',
                        tempat_kegiatan     ='$tempat',
                        waktu_kegiatan      ='$tanggal',
                        jumlah_peserta      ='$jumlah',
                        narasumber          ='$narasumber',
                        biaya_kegiatan      ='$biaya'
                        WHERE id_kegiatan   ='$_POST[id_kegiatan]'";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: admin.php?page=kegiatan');
    } else {
        header('Location: admin.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
