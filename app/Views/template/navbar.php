<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid container">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">STEVEN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex col-md-9">
                <a class="fas fa-search search-btn"></a>
                <input class="form-control ml-2 me-2 search-bar" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success search-btn" type="submit">Search</button> -->
            </form>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">How To</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Create Event</a>
                </li>

                <?php if (session('nama')) : ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sticket</a>
                    </li>
                <?php endif; ?>

                <?php if (session('nama')) : ?>
                    <?php if (in_groups('pelaksana')) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Event Anda</a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if (!session('nama')) : ?>
                    <li class="nav-item">
                        <a class="nav-link active login-btn px-3 py-2" aria-current="page" href="<?= base_url('/index.php/login'); ?>">Login</a>
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
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>