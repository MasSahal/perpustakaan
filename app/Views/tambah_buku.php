<?php $this->extend('template') ?>
<?php $this->section('konten') ?>
<div class="row">
    <div class="col-12">
        <div class="card p-4">
            <div class="card border-0 px-5">
                <h2>Tambah Buku</h2>
                <hr>
                <form action="<?= base_url() ?>/input_buku" method="post">
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan judul" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang Buku</label>
                        <input type="text" name="pengarang" id="pengarang" class="form-control" placeholder="Masukan pengarang" aria-describedby="helpId">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penerbit">Penerbit Buku</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Masukan penerbit" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="date" name="tahun_terbit" id="tahun_terbit" class="form-control" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea type="text" name="sinopsis" id="sinopsis" rows="4" class="form-control" placeholder="Masukan sinopsis"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Tambahkan Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>