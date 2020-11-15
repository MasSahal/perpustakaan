<?php $this->extend('template') ?>
<?php $this->section('konten') ?>
<div class="row">
    <div class="col-12">
        <div class="responsive">
            <div class="card p-4">
                <div class="row">
                    <div class="col-10">
                        <h3>List Buku</h3>
                    </div>
                    <div class="col-2">
                        <a href="<?= base_url("/tambah_buku") ?>" class="btn btn-success btn-md btn-block">Tambah Buku</a>
                    </div>
                </div>

                <?php if (isset($_SESSION['msg'])) { ?>
                    <div class="alert alert-dismissible alert-light">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $_SESSION['msg'] ?>
                    </div>
                <?php } ?>

                <table class="table table-stripped table-active">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Sinopsis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($list_buku as $buku) : ?>
                            <tr>
                                <td><?php echo $no += 1 ?></td>
                                <td><?php echo $buku->judul ?></td>
                                <td><?php echo $buku->pengarang ?></td>
                                <td><?php echo $buku->penerbit ?></td>
                                <td><?php echo $buku->tahun_terbit ?></td>
                                <td><?php echo $buku->sinopsis ?></td>
                                <td>
                                    <a href="<?= base_url('/hapus_buku/' . $buku->id) ?>" onclick="return confirm()" class="text-danger">Hapus</a>
                                    |
                                    <a href="<?= base_url('/edit_buku/' . $buku->id) ?>" class="text-warning">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>