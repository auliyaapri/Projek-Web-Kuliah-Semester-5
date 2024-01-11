<div class="container-fluid bg-white p-0">

    <div class="container-fluid page-header mt-5 p-0"
        style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Pesanan Kos Anda</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <h6 class="section-title text-start text-primary text-uppercase">Pesanan Kos</h6>
                    <h1 class="mb-4">Pesanan Kos Anda <b>
                            <?= $this->session->userdata('username'); ?>
                        </b></h1>
                    <!-- <h1><?= $user_id ?></h1>                     -->
                    <p class="mb-4">Silakan periksa dan konfirmasikan jika Anda belum melakukannya dengan mengklik <b
                            class="text-success">tombol button konfirmasi</b> di bawah ini. Ini akan membantu memastikan
                        bahwa semua informasi yang Anda masukkan sudah lengkap dan akurat. Setelah itu, perbarui halaman
                        untuk melihat pembaruan yang telah dilakukan</p>
                    <!-- ===================== YANG BARU ===================== -->
                    <a href="" class="btn btn-danger text-capitalize"><i class="fas fa-redo-alt"></i> Perbarui
                        Halaman</a>
                    <table class="table datatable table-responsive ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kos</th>
                                <th scope="col">No Invoice</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status Pembayaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_pemesanan as $item): ?>
                                <tr>
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td>
                                        <?= $item->nama_kos; ?>
                                    </td>
                                    <td>INV/KOS/
                                        <?= $item->pemesanan_id; ?>/
                                        <?= $item->tanggal_pemesanan; ?>
                                    </td>
                                    <td>
                                        <?= 'Rp. ' . number_format($item->harga, 0, ',', '.') ?>
                                    </td>

                                    <td>
                                        <!-- ===== DALAM PROSES ==== -->
                                        <?php if ($item->status == "dalam proses"): ?>
                                            <button href="" class="btn btn-danger text-capitalize" type="button"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <?= $item->status; ?>
                                            </button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Pemilik kos akan segera memproses sewa kos anda
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary text-capitalize"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- ===== PENDING ==== -->
                                        <?php if ($item->status == "pending"): ?>
                                            <button href="" class="btn btn-danger text-capitalize" type="button"
                                                data-bs-toggle="modal" data-bs-target="#pending">
                                                <?= $item->status; ?>
                                            </button>
                                            <div class="modal fade" id="pending" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Status Anda masih tertunda, harap konfirmasikan pembayaran Anda.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary text-capitalize"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- ===== Aktif ==== -->
                                        <?php if ($item->status == "aktif"): ?>
                                            <button href="" class="btn btn-success text-capitalize" type="button"
                                                data-bs-toggle="modal" data-bs-target="#pending">
                                                <?= $item->status; ?>
                                            </button>
                                            <div class="modal fade" id="pending" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Status pembayaran Anda telah berhasil menjadi status diaktifkan, dan
                                                            Anda sekarang memiliki akses sebagai penyewa kosan.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary text-capitalize"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- ===== Selesai ==== -->
                                        <?php if ($item->status == "selesai"): ?>
                                            <button href="" class="btn btn-warning text-capitalize" type="button"
                                                data-bs-toggle="modal" data-bs-target="#pending">
                                                <?= $item->status; ?>
                                            </button>
                                            <div class="modal fade" id="pending" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Status anda telah selesai
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary text-capitalize"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <h1>

                                           
                                            <!-- <?php
                                            $tanggalHariIni = new DateTime(date('Y-m-d'));
                                            $tanggal_checkout = new DateTime($item->tanggal_checkout); // Pastikan ini adalah objek DateTime
                                        
                                            if ($tanggal_checkout < $tanggalHariIni) {
                                                echo "sudah tidak aktif";
                                            }
                                            ?> -->


                                            <!-- <?php
                                            $tanggalHariIni = new DateTime(date('Y-m-d'));
                                            echo $tanggalHariIni->format('Y-m-d');
                                            ?> -->





                                            <!-- <?php
                                            $tanggal_checkout = $item->tanggal_checkin;
                                            $tanggal_checkout_baru = date('Y-m-d', strtotime($tanggal_checkout . ' +90 days'));
                                            echo $tanggal_checkout_baru;
                                            ?> -->

                                        </h1>


                                    </td>

                                    <td>
                                        <?php if ($user_id == $item->penyewa_id): ?>

                                            <!-- ===== Jika Sudah Status Dalam Proses -->
                                            <?php if ($item->status == "dalam proses"): ?>
                                                <a href="<?= base_url('pages/kos/pemesanan_kos/detail/' . $item->pemesanan_id) ?>"
                                                    class="btn btn-secondary text-capitalize"><i class="fas fa-info-circle"></i>
                                                    Detail</a>
                                            <?php endif; ?>
                                            <!-- ===== Jika Sudah Status Dalam Proses -->

                                            <!-- ===== Jika Sudah Status Pending -->
                                            <?php if ($item->status == "pending"): ?>
                                                <a href="<?= base_url('pages/kos/pemesanan_kos/konfirmasi/' . $item->pemesanan_id) ?>"
                                                    class="btn btn-success text-capitalize"><i class="fas fa-check"></i>
                                                    Konfirmasi</a>
                                                <a href="<?= base_url('pages/kos/Detail_pemesanan/index/' . $item->pemesanan_id) ?>"
                                                    class="btn btn-secondary text-capitalize"><i class="fas fa-info-circle"></i>
                                                    Detail</a>
                                            <?php endif; ?>
                                            <!-- ===== END Jika Sudah Status Pending -->

                                            <!-- ===== Jika Sudah Status Aktif -->
                                            <?php if ($item->status == "aktif"): ?>
                                                <a href="<?= base_url('pages/kos/Detail_pemesanan/index/' . $item->pemesanan_id) ?>"
                                                    class="btn btn-secondary text-capitalize"><i class="fas fa-info-circle"></i>
                                                    Detail</a>
                                            <?php endif; ?>
                                            <!-- ===== END Jika Sudah Status Pending -->

                                            <!-- ===== Jika Sudah Selesai -->
                                            <?php if ($item->status == "selesai"): ?>
                                                <a href="<?= base_url('pages/kos/Detail_pemesanan/index/' . $item->pemesanan_id) ?>"
                                                    class="btn btn-secondary text-capitalize"><i class="fas fa-info-circle"></i>
                                                    Detail</a>
                                            <?php endif; ?>
                                            <!-- ===== END Jika Sudah Selesai -->


                                        <?php endif; ?>

                                    </td>


                                    <?php if ($user_id != $item->penyewa_id): ?>
                                        <td>
                                            <a href="<?= base_url('pages/kos/pemesanan_kos/konfirmasi/' . $item->pemesanan_id) ?>"
                                                class="btn btn-warning text-capitalize"><i class="fas fa-check"></i>
                                                Konfirmasi</a>
                                            <a href="<?= base_url('pages/kos/pemesanan_kos/batalkan/' . $item->pemesanan_id) ?>"
                                                class="btn btn-danger text-capitalize"><i class="fas fa-trash"></i> Batalkan</a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ================= INFO BUKA KOS -->

        </div>
    </div>
</div>
<!-- About End -->