<div class="container-fluid bg-white p-0">

    <!-- Page Header Start -->
    <div class="container-fluid page-header mt-5 p-0"
        style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); background-position: center; ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown mt-5">Temukan Kos Terbaik</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Cari Kos-kosan Kami</h6>
                <h1 class="mb-5">Temukan <span class="text-primary text-uppercase">Kos-kosan</span></h1>
            </div>

            <!-- Tombol Filter -->
            <div class="text-center mb-4">
                <button class="btn btn-filter" data-kategori="semua">All</button>
                <button class="btn btn-filter" data-kategori="pria">Pria</button>
                <button class="btn btn-filter" data-kategori="wanita">Wanita</button>
            </div>

            <div class="row g-4">
                <?php foreach ($kos_home as $kh): ?>
                    <?php
                    $gambar = $kh->foto_kos_1;
                    ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden" data-kategori="<?= strtolower($kh->kategori) ?>">
                            <div class="position-relative">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kh->foto_kos_1; ?>"
                                    style="height: 250px;">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp.
                                    <?= str_replace(',', '.', number_format($kh->harga)) ?> / Bulan
                                </small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">
                                        <?= $kh->nama_kos ?>
                                    </h5>
                                    <small class="bg-danger text-white rounded py-1 px-3" style="margin-right: -.7rem;">Kos
                                        <?= $kh->kategori ?>
                                    </small>
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
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4"
                                        href="<?= base_url('pages/Detail_kos/index/' . $kh->kos_id) ?>">View Detail</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-lg-12 text-center mt-5">
                    <a class="btn btn-md btn-primary rounded py-2 px-4 rounded-3"
                        href="<?= base_url('accommodation') ?>">Lihat Lainnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Room End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<style>
    .btn-filter {
        margin-right: 10px;
        border: 2px solid #387cfc;
        border-radius: 10px;
        padding: 8px 16px;
        cursor: pointer;
    }

    .btn-filter.active {
        background-color: #387cfc;
        color: white;
    }

    .room-item {
        width: 100%;
        height: 100%;
    }

    .room-item img {
        width: 100%;
        height: auto;
    }

    .col-lg-12.text-center.mt-5 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn-md {
        /* Sesuaikan properti lain jika diperlukan */
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(".btn-filter").on("click", function () {
            const kategori = $(this).data("kategori");

            // Tambahkan kelas "active" pada tombol yang diklik dan hapus dari tombol lainnya
            $(".btn-filter").removeClass("active");
            $(this).addClass("active");

            // Tampilkan atau sembunyikan elemen berdasarkan kategori
            if (kategori === "semua") {
                $(".room-item").show();
            } else {
                $(".room-item").hide();
                $(".room-item[data-kategori='" + kategori + "']").show();
            }
        });

        // Tampilkan semua item saat halaman dimuat
        $(".btn-filter[data-kategori='semua']").click();
    });
</script>
