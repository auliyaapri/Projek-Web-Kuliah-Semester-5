  <!-- Header Start -->
  <div class="container-fluid bg-dark px-0 fixed-top">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a aria-current="page" href="<?= base_url('welcome') ?>" <?= $this->uri->segment(1) == 'welcome' || $this->uri->segment(1) == '' ? 'class="nav-item nav-link active"' : 'class="nav-item nav-link"' ?>>Beranda</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="<?= base_url('accomodation') ?>" class="nav-item nav-link">Accomodation</a></a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="booking.html" class="dropdown-item">Booking</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                </div>
                            </div>
                            <a href="<?= base_url('contact') ?>" class="nav-item nav-link">Contact</a></a>
                            <div class="btn-navbar-login">
                                    <i class="fas fa-user"></i> Login / Register
                                </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->