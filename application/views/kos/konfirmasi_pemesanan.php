<div class="container-fluid bg-white p-0">

    <!-- Page Header Start -->
    <div class="container-fluid page-header mt-5 p-0"
        style="background-image: url(<?= base_url('assets/img/carousel-1.jpg') ?>);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Konfirmasi Pemesanan</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Edit Kos Start -->
    <div class="container-xxl py-5">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12">
                        <h6 class="section-title text-start text-primary text-uppercase">Konfirmasi</h6>
                        <h1 class="mb-4">Konfirmasi Pemesanan <span class="text-danger">
                                <?php foreach ($kos_update_status as $ked): ?>
                                    <?= $ked->nama_kos; ?>
                                <?php endforeach; ?>
                            </span></h1>
                        <p class="mb-4">Silakan lakukan perubahan status kepada penyewa kosan untuk memberikan pembaruan
                            terkait status pemesanan mereka.</p>
                        <form action="<?= base_url() . 'pages/kos/kelola_kos/update/' . $ked->id ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <form action="<?= base_url('pages/kos/kelola_kos/konfirmasi_sewa_kos/konfirmasi/' . $ked->id); ?>"
                                            method="post">
                                            <input type="hidden" name="konfirmasi" value="konfirmasi">
                                            <button data-bs-toggle="modal"
                                                data-bs-target="#modalKonfirmasi<?= $ked->id; ?>" type="button"
                                                class="btn btn-primary">Konfirmasi</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="w-100 btn btn-primary text-capitalize">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Info Membuka Kos</h6>
                        <h1 class="mb-4">Info Membuka Kos</h1>
                        <ul>
                            <li>
                                <p>Isikan nama kos atau nama pemilik dari kos agar pengguna yang lain mudah untuk
                                    mencarinya serta isikan kategori kos agar dapat membatasi user yang ingin memesan
                                    sesuai kategori saja yang dibolehkan.</p>
                            </li>
                            <!-- Tambahkan tombol Lihat Selengkapnya -->
                            <li>
                                <p>Isikan Fasilitas yang disediakan oleh kos anda sehingga pengguna bisa mengetahui dan
                                    berminat untuk memesan kos anda.</p>
                            </li>
                            <li>
                                <p>Isikan jumlah kamar dan harga kos anda seperti diketahui harga ini menjadi prioritas
                                    pertama untuk pengguna mencarinya.</p>
                            </li>
                            <li>
                                <p> Isikan keterangan atau bisa juga peraturan yang ada dikos anda sehingga sebelum
                                    pengguna lain memesan dia sudah tau dengan peraturan atau keterangan dikos anda..
                                </p>
                            </li>

                            <li>
                                <p>Pilihlah kampus terdekat dengan kos anda,biasanya pengguna menginginan kos yang
                                    terdekat dengan kampus atau tempat kerjanya.</p>
                            </li>
                            <li>
                                <p>Lengkapi kos anda dengan foto yang sebenarnya kami menyediakan 3 tempat untuk 3 foto
                                    kos anda diharapkan masing-masing foto dengan posisi yang berbeda.</p>
                            </li>
                            <li>
                                <p>Dengan mendaftar berarti anda sudah bersedia berkerja sama dengan kos awak dan
                                    diharapkan nomor telepon anda selalu aktif untuk kami beritahu jika ada informasi
                                    yang harus kami beritahu kepada anda.</p>
                            </li>
                            <li>
                                <p>Pastikan data kos anda sesuai dengan yang diinginan kos awak serta tidak melanggar
                                    undang-undang ,jika melanggar kos anda tidak akan kami proses atau tidak ditampilkan
                                    dimenu utama.</p>
                            </li>
                            <li>
                                <p> Terimakasih atas kerja sama nya.</p>
                            </li>
                        </ul>
                        <!-- Tombol Lihat Selengkapnya -->
                    </div>

                </div>
                <!-- ================= INFO BUKA KOS -->

            </div>
        </div>
    </div>
</div>
<!-- Edit Kos End -->