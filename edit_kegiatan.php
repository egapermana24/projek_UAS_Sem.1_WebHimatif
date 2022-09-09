<?php
include("koneksi.php");
if (!isset($_GET['id'])) {
    header('Location: admin.php?page=kegiatan');
}
$kode = $_GET['id'];
$sql = "SELECT * FROM kegiatan_himatif WHERE id_kegiatan=$kode";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Data Kegiatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form method="post" action="ubah_kegiatan_aksi.php" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <input hidden type="input" class="form-control" id="idKegiatan" name="id_kegiatan" value="<?= $data['id_kegiatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="input" class="form-control" name="judul" value="<?= $data['judul_kegiatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat Kegiatan</label>
                                <input type="input" class="form-control" id="tempat" name="tempat" placeholder="masukan tempat kegiatan" value="<?= $data['tempat_kegiatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Kegiatan</label>
                                <input type="date" class="form-control" id="waktu" name="tanggal" value="<?= $data['waktu_kegiatan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="peserta">Jumlah Peserta</label>
                                <input type="input" class="form-control" id="peserta" name="jumlah" placeholder="masukan tempat kegiatan" value="<?= $data['jumlah_peserta'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="narasumber">Narasumber</label>
                                <input type="input" class="form-control" id="narasumber" name="narasumber" placeholder="masukan nama narasumber" value="<?= $data['narasumber'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya Kegiatan</label>
                                <input type="input" class="form-control" id="biaya" name="biaya" placeholder="masukan biaya kegiatan" value="<?= $data['biaya_kegiatan'] ?>">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="simpan">Ubah Data</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>