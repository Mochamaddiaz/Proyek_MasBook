<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>
<div class="container level-content mt-4">
    <h4>Pengajuan Akun Pelaksana Event</h4>
    <hr>
    <small>* Pastikan Anda telah mengajukan permintaan menaikkan status level akun menjadi pelaksana event. Level akun dapat dilihat pada laman Profil</small>
    <div class="col-md-11 level-box">

        <div class="form-group">
            <label for="nama" class="col-md-2">Nama Akun :</label>
            <input type="text" class="col-md-9 my-2 px-2 py-1" id="nama" name="nama" placeholder="" value="UKM Media Kampus" required>
        </div>
        <hr>
        <div class="form-group">
            <label for="alasan" class="col-md-2 mb-2">Alasan Pengajuan :</label>
            <textarea type="text" class="col-md-12 mb-2 px-2 py-1" id="alasan" name="alasan" placeholder="" value="" required></textarea>
        </div>
        <a class="sticket-btn px-4 py-1">STICKET</a>
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