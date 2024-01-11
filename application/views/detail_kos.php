<div class="container detail_kos pt-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Slider for photos -->
            <div id="photoSlider" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#photoSlider" data-bs-slide-to="0" class="active" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="1" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="2" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="3" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="4" style="cursor: pointer;"></li>
                    <!-- Add more indicators as needed -->
                </ol>
                <div class="carousel-inner rounded float-left">
                    <?php foreach ($kos_detail as $kd): ?>
                        <div class="carousel-item active">
                            <!-- <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_1; ?>" class="d-block w-100" alt="Image 1"> -->
                            <img class="img-fluid rounded w-100"
                                src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_1; ?>"
                                class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd): ?>
                        <div class="carousel-item">
                            <!-- <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_2; ?>" class="d-block w-100" alt="Image 1"> -->
                            <img class="img-fluid rounded w-100"
                                src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_2; ?>"
                                class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd): ?>
                        <div class="carousel-item">
                            <!-- <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_3; ?>" class="d-block w-100" alt="Image 1"> -->
                            <img class="img-fluid rounded w-100"
                                src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_3; ?>"
                                class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd): ?>
                        <div class="carousel-item">
                            <!-- <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_4; ?>" class="d-block w-100" alt="Image 1"> -->
                            <img class="img-fluid rounded w-100"
                                src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_4; ?>"
                                class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd): ?>
                        <div class="carousel-item">
                            <!-- <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_5; ?>" class="d-block w-100" alt="Image 1"> -->
                            <img class="img-fluid rounded w-100"
                                src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_5; ?>"
                                class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>


                </div>
                <a class="carousel-control-prev" href="#photoSlider" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#photoSlider" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

            <blockquote class="default mb-3 mt-3">
                <h4>Nama Pemilik Kos</h4>


                <?php foreach ($kos_detail as $kd): ?>
                    <h6 class="text-capitalize fw-normal">
                        <?= nl2br($kd->nama_lengkap); ?>

                    </h6>
                <?php endforeach; ?>
                <?php foreach ($kos_detail as $kd): ?>
                    <h6 class="text-capitalize fw-normal d-none">
                        Id pemilik :
                        <?= nl2br($kd->user_id); ?>
                    </h6>
                <?php endforeach; ?>


            </blockquote>
            <!-- =========== -->
            <blockquote class="default mb-3 mt-3">
                <h4>Peraturan khusus tipe kamar ini :</h4>


                <?php foreach ($kos_detail as $kd): ?>
                    <?= nl2br($kd->peraturan); ?>
                <?php endforeach; ?>


            </blockquote>
            <blockquote class="default mb-3">
                <h4>Alamat Kosan :</h4>
                <?php foreach ($kos_detail as $kd): ?>
                    <?= nl2br($kd->alamat_kos); ?> Kamar
                <?php endforeach; ?>
            </blockquote>

            <blockquote class="default mb-3">
                <h4>Kategori Kosan :</h4>
                <?php foreach ($kos_detail as $kd): ?>
                    <!-- UNTUK WANITA  -->
                    <?php if ($kd->kategori == 'Wanita'): ?>
                        <i class="fas fa-female"></i>
                        <?= 'Kos ' . nl2br($kd->kategori); ?>
                    <?php endif; ?>
                    <!-- UNTUK PRIA  -->
                    <?php if ($kd->kategori == 'Pria'): ?>
                        <i class="fas fa-male"></i>
                        <?= 'Kos ' . nl2br($kd->kategori); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </blockquote>

            <blockquote class="default mb-3">
                <h4>Total Kamar :</h4>
                <?php foreach ($kos_detail as $kd): ?>
                    <?= nl2br($kd->jumlah_kamar); ?> | <i class="fas fa-bed"></i> Kamar
                <?php endforeach; ?>
            </blockquote>

            <blockquote class="default mb-3">
                <h4>Fasilitas Kamar :</h4>
                <ol>
                    <?php $count = 1; // Inisialisasi nomor urutan 
                    ?>
                    <?php foreach ($kos_detail as $kd): ?>
                        <?php $fasilitas_kamar = explode(', ', $kd->fasilitas_kamar); ?>
                        <?php foreach ($fasilitas_kamar as $fasilitas): ?>
                            <li>
                                <?= $fasilitas; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ol>
            </blockquote>

            <!-- =========== Fasilitas Kamar Mandi ===========  -->
            <blockquote class="default mb-3">
                <h4>Fasilitas Kamar Mandi:</h4>
                <ol>
                    <?php $count = 1; // Inisialisasi nomor urutan 
                    ?>
                    <?php foreach ($kos_detail as $kd): ?>
                        <?php $fasilitas_kamar_mandi = explode(', ', $kd->fasilitas_kamar_mandi); ?>
                        <?php foreach ($fasilitas_kamar_mandi as $fasilitas): ?>
                            <li>
                                <?= $fasilitas; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ol>
            </blockquote>
            <!-- =========== Fasilitas Kamar Mandi =========== -->

            <blockquote class="default mb-3">
                <h4>Cerita pemilik tentang kos ini :</h4>

                <?php foreach ($kos_detail as $kd): ?>
                    <?php
                    $textFromDatabase = $kd->deskripsi;
                    $processedText = nl2br($textFromDatabase);
                    ?>
                    <p>
                        <?= $processedText ?>
                    </p>
                <?php endforeach; ?>
            </blockquote>
        </div>

        <div class="col-md-6">
            <div class="card w-75">
                <div class="card-body">
                    <h3 class="card-title">
                        <u>
                            <?php foreach ($kos_detail as $kd): ?>
                                <?= $kd->nama_kos; ?>
                            <?php endforeach; ?>
                        </u>
                    </h3>

                    <h4 class="card-text font-weight-bold" id="harga_perbulan">
                        Harga : Rp.
                        <?php foreach ($kos_detail as $kd): ?>

                            <?php $formatted_number = $kd->harga;

                            $title_harga = number_format($formatted_number, 0, ',', '.');
                            echo $title_harga; // Output: 1.000
                        
                            $angka = number_format($formatted_number, 0, ',', '.');
                            ;
                            $ubahJadiTeks = strval($title_harga);
                            ?>
                        <?php endforeach; ?>

                    </h4>



                    <form action="<?= base_url('pages/kos/Sewa_kos/tambah_kos') ?>" method="post">
                        <div class="form-group mt-3">
                            <label for="startDate">Mulai Kos</label>
                            <input type="date" class="form-control" id="startDate" aria-describedby="emailHelp"
                                name="tanggal_checkin" required>
                        </div>
                        <!-- == -->
                        <div class="form-group w-100 mt-3">
                            <label for="paymentOption" class="mb-2">Pilihan Pembayaran</label> <br>
                            <select class="form-select" id="paymentOption" onchange="hitungTotalHarga()"
                                name="durasi_sewa" required>
                                <option selected value="">--- Pilih Pembayaran ---</option>
                                <option value="30">Per Bulan</option>
                                <option value="90">Per 3 Bulan</option>
                                <option value="180">Per 6 Bulan</option>
                                <option value="365">Per Tahun</option>
                            </select>
                        </div>
                        <!-- == -->
                        <div class="form-group w-100 mt-3">
                            <label for="jumlah_kamar" class="mb-2">Jumlah Kamar</label>
                            <select class="form-select" id="jumlah_kamar" name="jumlah_kamar"
                                onchange="hitungTotalHarga()" required>
                                <option selected value="">--- Pilih Jumlah Kamar ---</option>

                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?= $i ?>">
                                        <?= $i ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="totalPriceInput">Total Harga</label>
                            <input type="text" class="form-control" id="totalPriceInput" name="total_harga" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="tanggalBerakhirInput">Anda akan berakhir pada tanggal</label>
                            <input type="date" class="form-control" id="tanggalBerakhirInput" name="tanggal_berakhir"
                                readonly>
                        </div>
                        <!-- ================== USER PRIBADI GITU DAH ==================== -->
                        <div class="form-group mt-3 mb-3 d-none">
                            <label for="penyewa_id">ID USER (Table USER)</label>
                            <p>User ID:
                                <?= $user_id ?>
                            </p>
                            <input type="text" class="form-control" id="penyewa_id" name="penyewa_id"
                                value="<?= $user_id ?>" readonly>
                        </div>
                        <div class="form-group mt-3 mb-3 d-none">
                            <label for="penyewa_id">ID KOS (TABLE KOS)</label>
                            <input type="text" class="form-control" id="kos_id" name="kos_id"
                                value="<?= $this->uri->segment(4) ?>" readonly>
                        </div>

                        <div class="form-group mt-3 mb-3 d-none">
                            <label for="penyewa_id">ID PEMILIK (TABLE USER)</label>
                            <?php foreach ($kos_detail as $kd): ?>                             
                                <input type="text" class="form-control" id="pemilik_id" name="pemilik_id"
                                value="<?=$kd->user_id ?>" readonly>
                            <?php endforeach; ?>

                        </div>

                        <!-- Biaya Layanan -->
                        <!-- Jika Belum Login Biaya Layanan-->
                        <?php if ($user_id === NULL): ?>
                            <div class="form-group d-none mt-3 mb-3">
                                <label for="biaya_layanan">Biaya Layanan</label>
                                <?php $harga_biaya_layanan = number_format(8000, 0, ',', '.'); ?>
                                <input type="text" class="form-control" id="biaya_layanan" name="biaya_layanan"
                                    value="Rp. <?= $harga_biaya_layanan ?>" readonly>
                            </div>
                        <?php endif; ?>
                        <!-- Jika Sudah Login Biaya Layanan-->
                        <?php if ($user_id !== NULL): ?>
                            <div class="form-group mt-3 mb-3">
                                <label for="biaya_layanan">Biaya Layanan</label>
                                <?php $harga_biaya_layanan = number_format(15000, 0, ',', '.'); ?>
                                <input class="form-control" placeholder="Rp. 15.000" readonly>
                                <input type="text" class="form-control d-none" id="biaya_layanan" name="biaya_layanan"
                                    value="15000" readonly>
                            </div>
                        <?php endif; ?>




                        <label for="paymentOption" class="mb-2 text-bg-danger" style="font-size: 15px;"><b> Catatan
                                :</b> <br> <i> Dalam opsi pembayaran ini, sudah mencakup berapa lama Anda berencana
                                untuk menyewa kamar kos ini. </i></label> <br>

                        <?php if ($kd->user_id !== $user_id): ?>

                            <a href="https://wa.me/<?= $kd->no_telpon ?>"
                                class="btn btn-detail-contact text-capitalize w-100">
                                <i class="fab fa-whatsapp icon-detail-contact"></i> Tanya Pemilik Melalui WhatsApp
                            </a>
                        <?php endif; ?>

                        <!-- Jika yang mau sewa kos jenis kelamin tidak sama dengan kategori kos -->
                        <?php $jenis_kelamin_kategori = $kd->kategori; ?>

                        <!-- ======== Jika Sama Jenis Kelamin tidak sama dengan kategori kosan -->
                        <?php if ($jenis_kelamin != $jenis_kelamin_kategori && $user_id != $kd->user_id && $user_id != null): ?>
                            <button type="button" class="w-100 btn btn-warning mt-3 text-capitalize" id="sewaButton">Sewa
                                Kos Beda jenis kelamin</button>
                        <?php endif; ?>



                        <!-- Jika belum login -->
                        <?php if ($user_id === NULL): ?>
                            <button type="submit" class="w-100 btn btn-warning mt-3 text-capitalize">Sewa
                                Kos User Belum login</button>
                        <?php endif; ?>
                        <!-- END Jika belum login -->

                        <script>
                            // Membuat event listener untuk tombol "Sewa Kosss"
                            document.getElementById('sewaButton').addEventListener('click', function () {
                                // Menggunakan SweetAlert2 untuk menampilkan pesan
                                Swal.fire({
                                    title: 'Peringatan!',
                                    text: 'Mohon maaf, pemesanan kamar ini hanya tersedia untuk jenis kelamin <?= $kd->kategori ?>. Pemesanan oleh jenis kelamin <?= $jenis_kelamin ?> tidak diizinkan.',
                                    icon: 'warning',
                                    confirmButtonText: 'OK'
                                });
                            });
                        </script>
                        <!-- ======== END Jika Sama Jenis Kelamin tidak sama dengan kategori kosan -->


                        <!-- ======== Jika Jenis Kelamin sama dengan kategori kosan -->
                        <?php if ($jenis_kelamin == $jenis_kelamin_kategori): ?>

                            <?php foreach ($kos_detail as $kd): ?>
                                <?php $jumlah_kamar = $kd->jumlah_kamar; ?>
                            <?php endforeach; ?>

                            <?php if ($jumlah_kamar < 1): ?>
                                <button type="submit" class="w-100 btn btn-danger mt-3 text-capitalize" id="sewaButton"
                                    disabled>Sewa Kos</button>

                            <?php endif; ?>
                            <?php if ($jumlah_kamar >= 1 && $user_id != NULL && $kd->user_id != $user_id): ?>
                                <button type="submit" class="w-100 btn btn-warning mt-3 text-capitalize" id="sewaButton">Sewa
                                    Kos</button>
                            <?php endif; ?>

                            <!-- ===== JIKA USERNAME SAMA DENGAN YANG PUNYA SEWA KOS===== -->




                            <!-- <?= $jenis_kelamin ?> -->
                            <!-- ===== JIKA USERNAME SAMA DENGAN YANG PUNYA SEWA KOS===== -->

                        <?php endif; ?><!-- ======== END Jika Sama Jenis Kelamin sama dengan kategori kosan -->

                        <!-- ======== Jika Pemilik Kos Jenis Kelamin berbeda dengan kategori kosan -->
                        <?php if ($kd->user_id === $user_id): ?>
                            <a href="<?= base_url('kelola_kos') ?>" class="w-100 btn btn-primary mt-3 text-capitalize">
                                <i class="fas fa-cogs"></i> Kelola Kos Anda
                            </a>
                        <?php endif; ?>

                        <!-- ======== END Jika Pemilik Kos Jenis Kelamin berbeda dengan kategori kosan -->

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <h2 class="mb-5 text-center">Info ! Transaksi pemesanan</h2>
        <div class="col-md-3 d-flex align-items-start justify-content-between">
            <h2>
                <i class="fas fa-money-check-alt pe-3 text-warning "></i>
            </h2>
            <div class="card border-0">
                <h5>Pembayaran</h5>
                <p>Lakukan transaksi pembayaran ke bank yang telah ditentukan.</p>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-start justify-content-between">
            <h2>
                <i class="fas fa-check-circle pe-3 text-warning"></i>
            </h2>
            <div class="card border-0">
                <h5>Konfirmasi pembayaran</h5>
                <p>Lakukan konfirmasi pembayaran untuk menyelesaikan pemesanan kos Anda.</p>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-start justify-content-between">
            <h2>

                <i class="fas fa-download pe-3 text-warning"></i>
            </h2>
            <div class="card border-0">
                <h5>Unduh Bukti</h5>
                <p>Unduh bukti pemesanan Anda dan serahkan kepada pemilik kos untuk proses selanjutnya.
                    .</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<?php $oke = $formatted_number; ?>

<script>
    // Fungsi untuk menghitung total harga dan tanggal berakhir
    function hitungTotalHarga() {
        var hargaAwal = <?= $oke ?>; // Ganti dengan harga awal yang sesuai
        var durasiSewa = parseInt(document.getElementById('paymentOption').value); // Ambil durasi sewa
        var jumlahKamar = parseInt(document.getElementById('jumlah_kamar').value); // Ambil jumlah kamar
        var totalHarga;

        // Menggunakan pernyataan kondisional untuk mengubah harga berdasarkan opsi yang dipilih
        if (durasiSewa === 30) {
            totalHarga = hargaAwal * 1 * jumlahKamar; // Harga per bulan
        } else if (durasiSewa === 90) {
            totalHarga = hargaAwal * 3 * jumlahKamar; // Harga per 3 bulan
        } else if (durasiSewa === 180) {
            totalHarga = hargaAwal * 6 * jumlahKamar; // Harga per 6 bulan
        } else if (durasiSewa === 365) {
            totalHarga = hargaAwal * 12 * jumlahKamar; // Harga per tahun
        } else {
            // Handle opsi yang tidak dikenali jika diperlukan
            totalHarga = 0;
        }

        // Format total harga dalam Rupiah
        var formattedHarga = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(totalHarga);

        // Tampilkan total harga pada input "totalPriceInput"
        document.getElementById('totalPriceInput').value = formattedHarga;

        // Hitung dan tampilkan tanggal berakhir dengan benar
        var today = new Date();
        var startDate = new Date(document.getElementById('startDate').value);
        var tanggalBerakhir = new Date(startDate);

        // Menggunakan durasiSewa yang dipilih untuk menghitung tanggal berakhir
        tanggalBerakhir.setDate(startDate.getDate() + durasiSewa);

        var formattedDate = tanggalBerakhir.toISOString().slice(0, 10);
        document.getElementById('tanggalBerakhirInput').value = formattedDate;
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>