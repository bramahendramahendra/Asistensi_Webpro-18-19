<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">EMAIL</th>
                        <th class="text-center" scope="col">NIM</th>
                        <th class="text-center" scope="col">JURUSAN</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($mahasiswa as $mhs) : ?>
                        <td class="text-center"><?= $mhs['nama']; ?></td>
                        <td class="text-center"><?= $mhs['nim']; ?></td>
                        <td class="text-center"><?= $mhs['email']; ?></td>
                        <td class="text-center"><?= $mhs['jurusan']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>mahasiswa/tambah " class="btn btn-primary">Tambah Data Mahasiswa</a>
                </div>
            </div>

        </div>
    </div>
</div> 