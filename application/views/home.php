<div class="container-fluid bg-white p-0">
    <!-- Spinner Start -->

    <!-- Spinner End -->



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url() ?>assets/img/carousel-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Kos.id</h1>
                            <h1 class="display-3 text-white mb-4 animated slideInDown" style="font-size: 25px;">Hunian Ideal untuk Generasi Milenial</h1>

                            <a href="" class="btn btn-primary py-3 px-5 me-3 animated slideInLeft rounded">Mulai</a>
                        </div>
                    </div>
                </div>          
            </div>      
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Selamat Datang di <span class="text-primary text-uppercase">KOS.ID</span></h1>
                    <p class="mb-4">Kami adalah platform pencarian kos-kosan khusus untuk daerah Jatiwaringin dan Pondok Gede. Temukan kos-kosan terbaik di Jatiwaringin dan Pondok Gede dengan fitur pencarian kami yang mudah digunakan. Kami berkomitmen untuk memberikan informasi terpercaya tentang kos-kosan di Jatiwaringin dan Pondok Gede kepada Anda.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="<?= base_url() ?>assets/img/about-1.png" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="<?= base_url() ?>assets/img/about-2.png">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="<?= base_url() ?>assets/img/about-3.png">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() ?>assets/img/about-4.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                <!-- <p>User ID: <?= $user_id ?></p>
                <p>User ID: <?= $jenis_kelamin?></p> -->
            </div>
            <div class="row g-4">
    <?php $count = 0; ?>
    <?php foreach ($kos_home as $kh) : ?>
        <?php
        $gambar =  $kh->foto_kos_1;
        ?>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="room-item shadow rounded overflow-hidden">
                <div class="position-relative">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kh->foto_kos_1; ?>" style="height: 250px;">
                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp. <?= str_replace(',', '.', number_format($kh->harga)) ?> / Bulan</small>
                </div>
                <div class="p-4 mt-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0"><?= $kh->nama_kos ?></h5>                                    
                        <small class="bg-danger text-white rounded py-1 px-3" style="margin-right: -.7rem;">Kos <?= $kh->kategori ?></small>                                 
                    </div>

                    <!-- ===== DESKRIPSI ===== -->
                    <?php
                    $deskripsi = $kh->deskripsi;

                    if (strlen($deskripsi) > 150) {
                        $deskripsi = substr($deskripsi, 0, 150) . '...';
                    }
                    ?>

                    <p class="text-body mb-3">
                        <?= $deskripsi ?>
                    </p>
                    <!-- ===== END DESKRIPSI ===== -->

                    <div class="d-flex justify-content-between">
                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="<?= base_url('pages/Detail_kos/index/'.$kh->kos_id) ?>">View Detail</a>                                    
                    </div>
                </div>
            </div>
        </div>

        <?php
        $count++;
        if ($count == 3) {
            break; // Hentikan iterasi setelah 3 item
        }
        ?>
    <?php endforeach; ?>

    <div class="col-lg-12 text-center mt-5">
        <a class="btn btn-md btn-primary rounded py-2 px-4 rounded-3" href="<?= base_url('accomodation') ?>">Lihat Lainnya</a>
    </div>
</div>

        </div>
    </div>
    <!-- Room End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
            </div>

            <div class="row g-4">
            
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="#">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-calendar-alt fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Booking Mudah</h5>
                        <p class="text-body mb-0">Mudah melakukan pemesanan kos-kosan dengan sistem booking yang praktis.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="#">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-credit-card fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Pembayaran Online</h5>
                        <p class="text-body mb-0">Mudah bayar kos kosan Anda secara online dengan metode yang aman.</p>
                    </a>
                </div>         
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded" href="#">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-briefcase fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Lokasi Strategis</h5>
                        <p class="text-body mb-0">Temukan kos-kosan dengan lokasi strategis dan mudah dijangkau.</p>
                    </a>
                </div>

            </div>


        </div>
    </div>
    <!-- Service End -->


    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>