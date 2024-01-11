<div class="container-fluid bg-white p-0">

    <!-- Page Header Start -->
    <div class="container-fluid page-header mt-5 p-0" style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Konfirmasi Pesanan Anda</h1>
            </div>
        </div>
    </div>

    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <h6 class="section-title text-start text-primary text-uppercase">Konfirmasi Kos</h6>
                    <h1 class="mb-4">Konfirmasi Pesanan Kos Anda
                        <!-- <?= $user_id ?> -->
                    </h1>
                    <p class="mb-4">Silahkan lakukan transaksi ke nomor rekening <b>
                            <?= $pemesanan->nama_kos; ?>
                        </b> yang tertera di bawah ini dan isi data berdasarkan transaksi yang telah dilakukan.</p>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('pages/kos/Pemesanan_kos/update_pemesanan') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <h5 class="card-title">Nomor Rekening Kos & Bank</h5>
                                    <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled value="<?= $pemesanan->nomor_rekening ?> || Bank  (<?= $pemesanan->bank; ?>)">
                                </div>
                                <!-- Harga -->
                                <div class="mb-3">
                                    <h5 class="card-title">Total yang Harus dibayar</h5>
                                    <?php $total_harga = $pemesanan->harga?>
                                    <?php $durasi_sewa = $pemesanan->durasi_sewa ?>

                                    <!-- Perhitungan Harga Berdasarkan bulan, 3 bulan,  6 bulan, 1 tahun  -->
                                    <?php if ($durasi_sewa == "365"): ?>
                                        <?php $total_harga2 = $total_harga * 12 + $pemesanan->biaya_layanan?>
                                    <?php endif; ?>
                                    <?php if ($durasi_sewa == "30"): ?>                                        
                                        <?php $total_harga2 = $total_harga * 1 + $pemesanan->biaya_layanan?>
                                    <?php endif; ?>
                                    <?php if ($durasi_sewa == "90"): ?>                                        
                                        <?php $total_harga2 = $total_harga * 3 + $pemesanan->biaya_layanan?>
                                    <?php endif; ?>
                                    <?php if ($durasi_sewa == "180"): ?>                                        
                                        <?php $total_harga2 = $total_harga * 6  + $pemesanan->biaya_layanan?>
                                    <?php endif; ?>                                    
                                    <!-- Perhitungan Harga Berdasarkan bulan, 3 bulan,  6 bulan, 1 tahun  -->
                                    <input class="form-control" type="text" placeholder="Disabled input"
                                        aria-label="Disabled input example" disabled
                                        value="Rp. <?= number_format($total_harga2, 0, ',', '.') ?>">
                                </div>
                                <!-- Nomor Rekening -->
                                <div class="mb-3">
                                    <h5 class="card-title">Nomor Rekening Anda</h5>
                                    <input class="form-control" type="number" placeholder="Rekening Anda"
                                        aria-label="Rekening Anda" name="nomor_rekening_penyewa" required>
                                </div>
                                <!-- Biaya Layanan -->
                                <div class="mb-3">
                                    <h5 class="card-title">Biaya Layanan</h5>                                    
                                    <input class="form-control" placeholder="Rp. 15.000" readonly>
                                    <input type="text" class="form-control d-none" id="biaya_layanan" name="biaya_layanan" value="15000" readonly>
                                    
                                </div>
                                <!-- Bank Rekening Anda -->
                                <div class="mb-3">
                                    <h5 class="card-title">Bank Rekening Anda</h5>
                                    <select class="form-select" aria-label="Default select example" name="bank_penyewa" required>
                                        <option value="">-- Pilih Bank --</option>
                                        <option value="BCA">BCA</option>
                                        <option value="BRI">BRI</option>
                                        <option value="BNI">BNI</option>
                                        <option value="CIMB Niaga">CIMB Niaga</option>
                                        <option value="Danamon">Danamon</option>
                                        <option value="Permata">Permata</option>
                                        <option value="Mega">Mega</option>                                        
                                    </select>
                                    <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>

                                <!-- ID PEMESANAN -->
                                <div class="mb-3 d-none">
                                    <h5 class="card-title">Pemesanan
                                        <?= $pemesanan->pemesanan_id; ?>
                                    </h5>
                                    <input class="form-control" type="text" placeholder="Rekening Anda"
                                        aria-label="Rekening Anda" name="pemesanan_id"
                                        value="<?= $pemesanan->pemesanan_id; ?>">
                                </div>
                                <!-- STATUS PEMESANAN -->
                                <div class="mb-3 d-none">
                                    <h5 class="card-title">Status</h5>
                                    <input class="form-control" type="text" aria-label="Rekening Anda" name="status"
                                        value="dalam proses">
                                </div>
                                <!-- Bukti Bayar -->
                                <div class="mb-3">
                                    <h5 class="card-title">Bukti Pembayaran</h5>
                                    <input class="form-control bg-transparent" type="file" name="bukti_pembayaran" required>
                                </div>

                                <button type="submit" class="btn btn-primary text-capitalize">Selesai</button>
                                <a href="#" class="btn btn-primary text-capitalize">Kembali</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ================= INFO BUKA KOS -->

        </div>
    </div>
</div>
<!-- About End -->