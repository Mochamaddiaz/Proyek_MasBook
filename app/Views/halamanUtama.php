<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>
<div class="container content mt-5">

    <h3>Event Terdekat</h3>
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
                            <p class="card-text"><i class="far fa-calendar-check"></i>12 Mei 2021</p>
                            <p class="card-text"><i class="far fa-clock"></i>10.00-11.00 WIB</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i>Online</p>
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
                            <p class="card-text"><i class="far fa-calendar-check"></i>12 Mei 2021</p>
                            <p class="card-text"><i class="far fa-clock"></i>10.00-11.00 WIB</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i>Online</p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <div class="container mt-5">
        <div class="row col-md-3">
            <div class="col">
                <h5>filter :</h5>
            </div>
            <div class="col">
                <select id="waktu" class="filter">
                    <option selected>Minggu Ini</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col">
                <select id="tipe" class="filter">
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
                        <p class="card-text"><i class="far fa-calendar-check"></i>12 Mei 2021</p>
                        <p class="card-text"><i class="far fa-clock"></i>10.00-11.00 WIB</p>
                    </div>
                </div>
            </a>
            <a href="" class="col card-container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/css/img/bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Event Name</h5>
                        <p class="card-text">This is an event description. Please describe your event attractively.</p>
                        <p class="card-text"><i class="far fa-calendar-check"></i>12 Mei 2021</p>
                        <p class="card-text"><i class="far fa-clock"></i>10.00-11.00 WIB</p>
                    </div>
                </div>
            </a>
            <a href="" class="col card-container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/css/img/bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Event Name</h5>
                        <p class="card-text">This is an event description. Please describe your event attractively.</p>
                        <p class="card-text"><i class="far fa-calendar-check"></i>12 Mei 2021</p>
                        <p class="card-text"><i class="far fa-clock"></i>10.00-11.00 WIB</p>
                    </div>
                </div>
            </a>
            <a href="" class="col card-container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/css/img/bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Event Name</h5>
                        <p class="card-text">This is an event description. Please describe your event attractively.</p>
                        <p class="card-text"><i class="far fa-calendar-check"></i>12 Mei 2021</p>
                        <p class="card-text"><i class="far fa-clock"></i>10.00-11.00 WIB</p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>

</div>
<?= $this->endSection(); ?>