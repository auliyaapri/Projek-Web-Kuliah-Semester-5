<div class="container-fluid bg-white p-0">

    <div class="container-fluid page-header mt-5 p-0" style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Detail Pesanan Anda</h1>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                </ol>
            </nav>
            </div>
        </div>
    </div>


    <!-- ===========YANG BARU ============ -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <h6 class="section-title text-start text-primary text-uppercase">Detail Pesanan</h6>
                    <h1 class="mb-4">Detail Pesanan Kos Anda</h1>


                    <?php if ($pemesanan->status == "pending"): ?>
                        <div class="alert alert-danger w-50" role="alert">
                            Perhatian status anda masih <b>Pending</b> segera lakukan pembayaran!.
                        </div>
                    <?php endif; ?>

                    <p class="mb-4 w-75">Ini adalah halaman detail pesanan kosan Anda, di sini Anda dapat melihat
                        informasi rinci mengenai kosan yang telah Anda pesan dari <span class="text-danger fw-bold">
                            <?= $pemesanan->nama_kos ?>
                        </span>. Secara garis besar, halaman ini berfungsi sebagai faktur atau ringkasan pesanan Anda
                    </p>
                    <!-- ======== table baru ======== -->
                    <div class="mt-5">
                        <div class="invoice-container">
                            <div class="invoice-header">
                                <h1>Invoice</h1>
                            </div>
                            <div class="invoice-details">
                                <table class="table table-bordered invoice-table">
                                    <tr>
                                        <th>NO. Invoice</th>
                                        <td>INV/KOS/<?= $pemesanan->pemesanan_id; ?>/<?= $pemesanan->tanggal_pemesanan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap Pemesan</th>
                                        <td>
                                            <?= $pemesanan->nama_lengkap ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nama Kos-kosan</th>
                                        <td>
                                            <?= $pemesanan->nama_kos ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Kosan</th>
                                        <td>
                                            <?= $pemesanan->kategori ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Kamar Yang dipesan</th>
                                        <td>
                                            <?= $pemesanan->jumlah_kamar_pemesanan ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Harga / Perbulan</th>
                                        <td>
                                            <?= 'Rp. ' . number_format($pemesanan->harga, 0, ',', '.') ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Rekening & Bank Anda</th>
                                        <td>
                                            <?= $pemesanan->nomor_rekening ?> | Bank (
                                            <?= $pemesanan->bank_penyewa ?>)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Total Biaya</th>
                                        <td>
                                            <?php $hitung_harga = $pemesanan->durasi_sewa; ?>

                                            <!-- 1 BULAN -->
                                            <?php if ($hitung_harga == 30): ?>
                                                <?php number_format($hitung_jadi_harga = $pemesanan->harga * 1 + $pemesanan->biaya_layanan) ?>
                                                <?= 'Rp. ' . number_format($hitung_jadi_harga, 0, ',', '.') ?>
                                            <?php endif; ?>

                                            <!-- 3 BULAN -->
                                            <?php if ($hitung_harga == 90): ?>
                                                <?php number_format($hitung_jadi_harga = $pemesanan->harga * 3 + $pemesanan->biaya_layanan) ?>
                                                <?= 'Rp. ' . number_format($hitung_jadi_harga, 0, ',', '.') ?>
                                            <?php endif; ?>

                                            <!-- 6 BULAN -->
                                            <?php if ($hitung_harga == 180): ?>
                                                <?php number_format($hitung_jadi_harga = $pemesanan->harga * 6 + $pemesanan->biaya_layanan) ?>
                                                <?= 'Rp. ' . number_format($hitung_jadi_harga, 0, ',', '.') ?>
                                            <?php endif; ?>

                                            <!-- 12 BULAN -->
                                            <?php if ($hitung_harga == 365): ?>
                                                <?php number_format($hitung_jadi_harga = $pemesanan->harga * 12 + $pemesanan->biaya_layanan) ?>
                                                <?= 'Rp. ' . number_format($hitung_jadi_harga, 0, ',', '.') ?>
                                            <?php endif; ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Biaya Layanan</th>
                                        <td>                                        
                                        <?= 'Rp. ' . number_format($pemesanan->biaya_layanan, 0, ',', '.') ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Durasi Sewa Kos</th>
                                        <td>
                                            <?php if ($pemesanan->durasi_sewa == 30): ?>
                                                <?= $pemesanan->durasi_sewa ?> Hari / 1 Bulan
                                            <?php endif; ?>
                                            <?php if ($pemesanan->durasi_sewa == 90): ?>
                                                <?= $pemesanan->durasi_sewa ?> Hari / 3 Bulan
                                            <?php endif; ?>
                                            <?php if ($pemesanan->durasi_sewa == 180): ?>
                                                <?= $pemesanan->durasi_sewa ?> Hari / 6 Bulan
                                            <?php endif; ?>
                                            <?php if ($pemesanan->durasi_sewa == 365): ?>
                                                <?= $pemesanan->durasi_sewa ?> Hari / 1 Tahun
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pesan Kos</th>
                                        <td>
                                            <?= date('d/F/Y', strtotime($pemesanan->tanggal_pemesanan)); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Check In Kos</th>
                                        <td>
                                            <?= date('d/F/Y', strtotime($pemesanan->tanggal_checkin)); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Check Out Kos</th>
                                        <td>
                                            <?= date('d/F/Y', strtotime($pemesanan->tanggal_checkout)); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Bukti Pembayaran</th>
                                        <td>                                            
                                            <img src="<?= base_url() ?>uploads/bukti_pembayaran/<?= $pemesanan->bukti_pembayaran; ?>"
                                                alt="" class="w-25 img-fluid" data-bs-toggle="modal"
                                                data-bs-target="#gambarModal" style="cursor:pointer;">

                                            <!-- Modal -->
                                            <div class="modal fade" id="gambarModal" tabindex="-1"
                                                aria-labelledby="gambarModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="<?= base_url() ?>uploads/bukti_pembayaran/<?= $pemesanan->bukti_pembayaran; ?>"
                                                                alt="" class="w-75">
                                                                <p>Ini adalah bukti pembayaran Anda. Silakan periksa dengan seksama.</p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary text-capitalize"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </table>



                                
                                <div class="d-flex justify-content-end mt-5">
                                <a href="<?= base_url('pages/kos/pemesanan_kos/index') ?>"
                                    class="btn btn-success text-capitalize">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                             
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ===========YANG BARU ============ -->
    <style>
        .invoice-table {
            width: 100%;
            margin: 0 auto;            
        }
    </style>


</div>

<style>
    .invoice-container {
        background-color: #f9f9f9;
        padding: 20px;
    }

    .invoice-header {
        background-color: #007bff;
        color: #fff;
        padding: 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .invoice-header h1 {
        font-size: 28px;
    }

    .invoice-details {
        background-color: #fff;
        padding: 20px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .invoice-table th {
        background-color: #007bff;
        color: #fff;
        width: 250px;
    }

    .invoice-table th,
    .invoice-table td {
        border: 1px solid #ddd;
        padding: 10px;
    }

    .invoice-table img {
        max-width: 100%;
    }
</style>