<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4 edit-content">
    <h4>Edit Profil</h4>
    <hr>
    <div class="row col-md-8 edit-box">
        <form>
            <div class="form-group">
                <label for="email" class="col-md-2">E-mail :</label>
                <input type="email" class="col-md-9 mt-2 px-2 py-1" id="email" name="email" placeholder="" value="Email@stis.ac.id" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="nama" class="col-md-2">Nama Akun :</label>
                <input type="text" class="col-md-9 my-2 px-2 py-1" id="nama" name="nama" placeholder="" value="UKM Media Kampus" required>
            </div>
            <div class="form-group">
                <label for="phone" class="col-md-2">No. Telp :</label>
                <input type="text" class="col-md-9 mb-5 px-2 py-1" id="phone" name="phone" placeholder="" value="08123678" required>
            </div>
            <div class="form-group col-md-11">
                <a class="simpan-btn px-4 py-1">Simpan</a>
                <a class="ubah-btn px-4 py-1">Ubah Password</a>

            </div>
        </form>
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