<div class="container-fluid bg-white p-0">


    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0 fixed-top">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="<?= base_url('welcome') ?>"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">
                        <img src="<?= base_url('assets/img/logo.png') ?>" class="w-50" alt="">
                    </h1>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a aria-current="page" href="<?= base_url('welcome') ?>"
                                <?= $this->uri->segment(1) == 'welcome' || $this->uri->segment(1) == '' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link"' ?>>Beranda</a>
                            <a href="<?= base_url('about') ?>" <?= $this->uri->segment(1) == 'about' || $this->uri->segment(1) == 'about' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link"' ?>>About</a></a>
                            <a href="<?= base_url('accomodation') ?>" <?= $this->uri->segment(1) == 'accomodation' || $this->uri->segment(1) == 'accomodation' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link"' ?>>Kos-Kosan</a></a>
                            <a href="<?= base_url('contact') ?>" <?= $this->uri->segment(1) == 'contact' || $this->uri->segment(1) == 'contact' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link"' ?>>Contact</a></a>
                            <!-- ============= buka kos ============= -->
                            <?php if ($this->session->userdata('username') === NULL): ?>
                                <a href="<?= base_url('buka_kos') ?>" <?= $this->uri->segment(1) == 'buka_kos' || $this->uri->segment(1) == 'buka_kos' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link d-none"' ?>><i class="fas fa-plus"></i> Buka Kos</a></a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('username') !== NULL): ?>
                                <a href="<?= base_url('buka_kos') ?>" <?= $this->uri->segment(1) == 'buka_kos' || $this->uri->segment(1) == 'buka_kos' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link"' ?>><i class="fas fa-plus"></i> Buka Kos</a></a>
                            <?php endif; ?>
                            <!-- ============= end buka kos ============= -->

                            <!-- ============= User ============= -->
                            <a href="<?= base_url('auth/login') ?>" class="nav-item nav-link ">
                                <?php if ($this->session->userdata('username') === NULL): ?>
                                    <div class="btn-navbar-login">
                                        <i class="fas fa-user"></i> Login / Register
                                    </div>
                                <?php endif; ?>
                            </a>


                            <?php if ($this->session->userdata('username') !== NULL): ?>
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i>
                                        <?= $this->session->userdata('username') ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="<?= ($this->uri->segment(1) == 'pemesanan_kos' || $this->uri->segment(4) == 'konfirmasi' || $this->uri->segment(3) == 'Detail_pemesanan') ? 'dropdown-item bg-primary' : 'dropdown-item' ?>"
                                                href="<?= base_url('pemesanan_kos') ?>">
                                                <i class="fas fa-shopping-cart"></i> Pesanan Saya
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item <?= ($this->uri->segment(1) == 'kelola_kos' && $this->uri->segment(2) != 'konfirmasi' || $this->uri->segment(4) == 'detail') ? 'bg-primary' : '' ?>"
                                                href="<?= base_url('kelola_kos') ?>">
                                                <i class="fas fa-home"></i> Kelola Kos
                                            </a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i
                                                    class="fas fa-sign-out-alt"></i> Keluar</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <!-- ============= User ============= -->

                            <style>
                                .dropdown-menu {
                                    left: -50px;
                                    /* Sesuaikan nilai negatif sesuai dengan kebutuhan Anda */
                                    position: absolute;
                                }
                            </style>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->