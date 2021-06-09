<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4 profil-content">
    <h4>Profil <span>(Nama Akun)</span></h4>
    <hr>
    <div class="row col-md-8 profil-box">
        <i class="far fa-user-circle ikon-user"></i>
        <h5>Nama Akun</h5>
        <h6>(Pembeli/Pelaksana)</h6>
        <hr>
        <div class="col">
            <p><i class="far fa-envelope ikon"></i>email@gmail.com</p>
        </div>
        <div class="col">
            <p><i class="fas fa-phone-volume ikon"></i>081234678</p>
        </div>
    </div>
    <footer>
        <div class="row">
            <hr>
            <img src="/css/img/steven-nosearch2.png" alt="Pencarian Tidak Ditemukan" class="nosearch">
            <hr>
        </div>
    </footer>
</div>
<?= $this->endSection(); ?>