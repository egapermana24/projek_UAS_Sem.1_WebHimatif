<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2>Data Kegiatan</h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
        </div>
        <div class="card-body">

            <a href="?page=tambah_kegiatan" class="btn btn-success">Tambah Data</a> <br><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul Kegiatan</th>
                            <th>Tempat Kegiatan</th>
                            <th>Waktu Kegiatan</th>
                            <th>Jumlah Peserta</th>
                            <th>Narasumber</th>
                            <th>Biaya Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $sql = "select *from kegiatan_himatif";
                        $query = mysqli_query($db, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?= $data['judul_kegiatan']; ?></td>
                                <td><?= $data['tempat_kegiatan']; ?></td>
                                <td><?= $data['waktu_kegiatan']; ?></td>
                                <td><?= $data['jumlah_peserta']; ?></td>
                                <td><?= $data['narasumber']; ?></td>
                                <td><?= $data['biaya_kegiatan']; ?></td>
                                <td>
                                    <a href="admin.php?page=detail&id=<?= $data['id_kegiatan'] ?>" class="btn btn-sm btn-info">Detail</a>
                                    <a href="admin.php?page=ubah_kegiatan&id=<?= $data['id_kegiatan'] ?>" class="btn btn-sm btn-warning">Ubah</a>
                                    <a href="hapus.php?id=<?= $data['id_kegiatan'] ?>" onclick="return confirm('Yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php
// "<img src='gambar/$data[gambar]' width='50px'"
?>