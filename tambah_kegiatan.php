<?php include "koneksi.php";
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Kegiatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form method="post" action="simpan_kegiatan_aksi.php" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="kegiatan">Judul Kegiatan</label>
                                <input type="input" class="form-control" id="kegiatan" name="judul" placeholder="masukan judul kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat Kegiatan</label>
                                <input type="input" class="form-control" id="tempat" name="tempat" placeholder="masukan tempat kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Kegiatan</label>
                                <input type="date" class="form-control" id="waktu" name="tanggal">
                            </div>
                            <div class="form-group">
                                <label for="peserta">Jumlah Peserta</label>
                                <input type="input" class="form-control" id="peserta" name="jumlah" placeholder="masukan jumlah peserta">
                            </div>
                            <div class="form-group">
                                <label for="narasumber">Narasumber</label>
                                <input type="input" class="form-control" id="narasumber" name="narasumber" placeholder="masukan nama narasumber">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya Kegiatan</label>
                                <input type="input" class="form-control" id="biaya" name="biaya" placeholder="masukan biaya kegiatan">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>