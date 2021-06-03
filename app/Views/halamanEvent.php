<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>
<div class="container content mt-4">

    <div class="col-md-10">
        <ul class="breadcrumb">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Nama Event</a></li>
        </ul>
    </div>

    <div class="container box-content col-md-10">
        <div class="row">
            <div class="col-md-6 img">

            </div>
            <div class="col-md-6 mt-4">
                <div class="card-body" id="info">
                    <h5 class="card-title">Event Name</h5>

                    <p class="card-text"><i class="fas fa-house-user"></i>Pelaksana : </p>
                    <p class="card-text"><i class="far fa-grin-alt"></i>Peserta : </p>
                    <p class="card-text"><i class="far fa-calendar-check"></i>Hari / Tanggal : </p>
                    <p class="card-text"><i class="far fa-clock"></i>Waktu : </p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i>Tempat : </p>
                    <p class="card-text"><i class="fas fa-phone-alt"></i>Narahubung : </p>
                    <p class="card-text">
                    <h6>Deskripsi : </h6> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit nemo doloribus esse consequatur suscipit a odio quidem. Adipisci mollitia beatae quis dolorum veritatis dolor minus ad, perferendis inventore quaerat debitis?</p>
                    <button type="button" class="joinEvent-btn p-2 mt-2" onclick="daftar()">Daftar Sekarang!</button>
                </div>

                <div class="card-body" id="daftar">
                    <h5 class="card-title">Event Name</h5>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control" id="nama" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="tiket">Jumlah Tiket</label>
                            <select class="custom-select px-3" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <button type="submit" class="join-btn px-3">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<script>
    function daftar() {
        document.getElementById('daftar').style.display = "block";
        document.getElementById('info').style.display = "none";
    }
</script>
<?= $this->endSection(); ?>