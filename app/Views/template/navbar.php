<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid container">
        <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="<?= base_url(); ?>/css/img/stevenlogo2.png" alt="" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex col-md-8">
                <a class="fas fa-search search-btn"></a>
                <input class="form-control ml-2 me-2 search-bar" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success search-btn" type="submit">Search</button> -->
            </form>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">CARA PAKAI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">BUAT EVENT</a>
                </li>

                <?php if (session('nama')) : ?>

                    <li class="nav-item">
                        <div class="nav-link active" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#beliTiket">
                            STICKET
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="beliTiket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body row">
                                        <div>Mohon Maaf fitur beli tidak bisa digunakan karena kelompok kami berfokus pada stakeholder pelaksana even dan admin</div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>

                <?php if (session('nama')) : ?>
                    <?php if (in_groups('pelaksana')) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuEvent" role="button" data-bs-toggle="dropdown" aria-expanded="false">EVENT ANDA</a>

                            <ul class="dropdown-menu" aria-labelledby="menuEvent">
                                <li><a class="dropdown-item" href="<?= base_url('/event/eventAktif'); ?>">Event Aktif</a></li>

                                <li><a class="dropdown-item" href="<?= base_url('/event/pengajuanEvent'); ?>">Pengajuan Event</a></li>

                                <li><a class="dropdown-item" href="<?= base_url('/event/riwayatEvent'); ?>">Riwayat Event</a></li>

                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if (!session('nama')) : ?>
                    <li class="nav-item">
                        <a class="nav-link active login-btn px-3 py-2" aria-current="page" href="<?= base_url('/index.php/login'); ?>">LOG IN</a>
                    </li>
                <?php endif; ?>

                <?php if (session('nama')) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session('nama') ?></span>
                            <img class="img-profile rounded-circle" style="width: 3rem;" src="<?= base_url(user()->user_image); ?>">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('user'); ?>">Profil</a></li>

                            <li><a class="dropdown-item" href="<?= base_url('/user/editProfile'); ?>">Edit Profil</a></li>

                            <?php if (in_groups('pembeli')) : ?>
                                <li><a class="dropdown-item" href="<?= base_url('/user/pengajuanLevel'); ?>">Pengajuan Level</a></li>
                            <?php endif; ?>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>