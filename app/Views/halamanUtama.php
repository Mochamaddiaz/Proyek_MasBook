<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>
<div class="container content mt-5">

    <h3>EVENT TERDEKAT</h3>
    <!-- et = event terdekat -->
    <div class="container">
        <div class="row">
            <a href="" class="content-et col-md-5 card">
                <div class="row">
                    <div class="col-md-7 img">

                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Event Name</h5>
                            <p class="card-text">This is an event description. Please describe your event attractively.</p>
                            <p class="card-text"><i class="far fa-calendar-check ikon"></i>12 Mei 2021</p>
                            <p class="card-text"><i class="far fa-clock ikon"></i>10.00-11.00 WIB</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt ikon"></i><span class="online px-2">Online</p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-md-2"></div>

            <a href="" class="content-et col-md-5 card">
                <div class="row">
                    <div class="col-md-7 img">

                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Event Name</h5>
                            <p class="card-text">This is an event description. Please describe your event attractively.</p>
                            <p class="card-text"><i class="far fa-calendar-check ikon"></i>12 Mei 2021</p>
                            <p class="card-text"><i class="far fa-clock ikon"></i>10.00-11.00 WIB</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt ikon"></i><span class="online px-2">Online</span></p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <div class="container mt-5">
        <div class="row col-md-4">
            <div class="col-md-3">
                <h5>Filter :</h5>
            </div>
            <div class="col-md-4">
                <select id="waktu" class="filter px-2 py-1">
                    <option selected>Minggu Ini</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <select id="tipe" class="filter px-2 py-1">
                    <option selected>Online</option>
                    <option>Offline</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <a href="" class="col card-container">
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
            <a href="" class="col card-container">
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
            <a href="" class="col card-container">
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
            <a href="" class="col card-container">
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

</div>

</div>
<?= $this->endSection(); ?>