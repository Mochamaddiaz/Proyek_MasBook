<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<div class="container riwayatevent-content mt-4">
    <h4>Riwayat Event</h4>
    <hr>
    <small>*Dibawah ini merupakan daftar event Anda yang telah dilaksanakan hingga hari ini.</small>
    <div class="row mt-5">
        <a href="" class="col-md-3 card-container">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/css/img/bg.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">This is an event description. Please describe your event attractively.</p>
                    <p class="card-text"><i class="far fa-calendar-check ikon"></i>12 Mei 2021</p>
                    <p class="card-text"><i class="far fa-clock ikon"></i>10.00-11.00 WIB</p>
                </div>
            </div>
        </a>
        <a href="" class="col-md-3 card-container">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/css/img/bg2.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">This is an event description. Please describe your event attractively.</p>
                    <p class="card-text"><i class="far fa-calendar-check ikon"></i>12 Mei 2021</p>
                    <p class="card-text"><i class="far fa-clock ikon"></i>10.00-11.00 WIB</p>
                </div>
            </div>
        </a>
    </div>
</div>

<?= $this->endSection(); ?>