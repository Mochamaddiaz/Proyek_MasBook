<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <h6>Hasil pencarian untuk "Search..."</h6>
    <div class="row">
        <img src="/css/img/steven-nosearch2.png" alt="Pencarian Tidak Ditemukan" class="nosearch">
        <h4>Pencarian Tidak Ditemukan</h4>
    </div>
</div>

<?= $this->endSection(); ?>