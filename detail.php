<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2>Detail Kegiatan</h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $kode = $_GET['id'];
                        $sql = "select *from kegiatan_himatif where id_kegiatan = $kode";
                        $query = mysqli_query($db, $sql);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td width="20%">Judul Kegiatan</td>
                                <td width="1%">:</td>
                                <td><?= $data['judul_kegiatan']; ?></td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat Kegiatan</td>
                                <td width="1%">:</td>
                                <td><?= $data['tempat_kegiatan']; ?></td>
                            </tr>
                            <tr>
                                <td width="20%">Waktu Kegiatan</td>
                                <td width="1%">:</td>
                                <td><?= $data['waktu_kegiatan']; ?></td>
                            </tr>
                            <tr>
                                <td width="20%">Jumlah Peserta</td>
                                <td width="1%">:</td>
                                <td><?= $data['jumlah_peserta']; ?></td>
                            </tr>
                            <tr>
                                <td width="20%">Narasumber</td>
                                <td width="1%">:</td>
                                <td><?= $data['narasumber']; ?></td>
                            </tr>
                            <tr>
                                <td width="20%">Biaya Kegiatan</td>
                                <td width="1%">:</td>
                                <td><?= $data['biaya_kegiatan']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->