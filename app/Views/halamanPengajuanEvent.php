<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>
<div class="container event-content mt-4">
    <h4>Pengajuan Event</h4>
    <hr>
    <div class="col-md-11 event-box mb-5">

        <div class="form-group">
            <label for="nama" class="col-md-3">Nama Event :</label>
            <textarea type="text" class="col-md-12 my-2 px-2 py-1" id="nama" name="nama" placeholder="" value="UKM Media Kampus" required></textarea>
        </div>
        <div class="form-group">
            <label for="nomor" class="col-md-3 mb-2">Nomor Narahubung : </label>
            <input type="text" class="col-md-2 mb-2 px-2 py-1" id="nomor" name="nomor" placeholder="+62" value="" required>
        </div>
        <div class="form-group">
            <label for="poster" class="col-md-3 mb-2 ">Poster Event :</label>
            <input type="file" class="col-md-4 mb-2 px-2 py-1 poster" id="poster" name="poster" placeholder="" value="" required>
        </div>
        <div class="form-group">
            <label for="harga" class="col-md-3 mb-2">Harga Tiket :</label>
            <input type="text" class="col-md-2 mb-2 px-2 py-1" id="harga" name="harga" placeholder="" value="" required>
            <small>Tulis "0" Apabila Gratis</small>
        </div>
        <div class="form-group">
            <label for="peserta" class="col-md-3 mb-2">Jumlah Peserta :</label>
            <input type="text" class="col-md-2 mb-2 px-2 py-1" id="peserta" name="peserta" placeholder="" value="" required>
        </div>
        <div class="row form-group">

            <label for="tanggal" class="col-md-3 mb-2">Tanggal Pelaksanaan :</label>
            <input type="date" class="col-md-2 mb-2 ml-2 px-2 py-1" id="tanggal" name="tanggal" placeholder="" value="" required>

            <label for="waktu" class="col-md-2 mb-2">Waktu Pelaksanaan :</label>
            <input type="time" class="col-md-1 mb-2 px-2 py-1" id="waktu" name="waktu" placeholder="" value="" required>

        </div>
        <div class="form-group">
            <label for="durasi" class="col-md-3 mb-2">Durasi Acara :</label>
            <input type="text" class="col-md-2 mb-2 px-2 py-1" id="durasi" name="durasi" placeholder="" value="" required>
            <small>Menit</small>
        </div>
        <div class="form-group">
            <label for="tempat" class="col-md-3 mb-2">Tempat Pelaksanaan :</label>

            <select id="tempat" class="px-2 py-1">
                <option selected>Online</option>
                <option>Offline</option>
            </select>

        </div>
        <div class="form-group">
            <label for="alamat" class="col-md-6">Alamat Pelaksanaan : *Link atau Alamat Gedung Pelaksanaan</label>
            <textarea type="text" class="col-md-12 my-2 px-2 py-1" id="alamat" name="alamat" placeholder="" value="UKM Media Kampus" required></textarea>
        </div>
        <div class="form-group">
            <label for="deskripsi" class="col-md-2">Deskripsi Event :</label>
            <textarea type="text" class="col-md-12 my-2 px-2 py-1" id="deskripsi" name="deskripsi" placeholder="" value="UKM Media Kampus" required></textarea>
        </div>
        <a class="ajukan-btn px-4 py-1">AJUKAN</a>
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