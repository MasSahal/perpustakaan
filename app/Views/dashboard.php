<?php $this->extend('template') ?>
<?php $this->section('konten') ?>
<div class="row">
    <div class="col-12">
        <div class="jumbotron bg-white">
            <h3 class="display-4">Selamat datang di aplikasi Perpus</h3>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="<?= base_url('/buku') ?>" role="button">Mulai</a>
            </p>
        </div>
    </div>
</div>
<?php $this->endSection() ?>