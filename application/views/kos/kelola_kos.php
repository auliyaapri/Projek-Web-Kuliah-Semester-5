<div class="container-fluid bg-white p-0">


    <div class="container-fluid page-header mt-5 p-0"
        style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Kelola Kos & Pesanan Kos</h1>
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
                    <h6 class="section-title text-start text-primary text-uppercase">Kelola Kosan</h6>
                    <h1 class="mb-4">Kelola Kos</h1>
                    <?php if (empty($koss)): ?>
                        <div class="col-5">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                Belum ada kosan yang Anda miliki.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                        </div>
                    <?php endif; ?>
                    <p class="mb-4">Berikut adalah tabel pengelolaan kos, yang mencakup daftar kosan yang telah Anda
                        buat.</p>
                    <!-- Table with stripped rows -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kos</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($koss as $kos): ?>
                                <tr>
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td>
                                        <?= $kos->nama_kos; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('kelola_kos/detail/' . $kos->id) ?>"
                                            class="btn btn-primary text-capitalize"><i class="bi bi-eye"></i> Lihat
                                            Detail</a>

                                        <!-- <a href="<?= base_url('pages/kos/kelola_kos/hapus_konfirmasi/' . $kos->id) ?>" class="btn btn-danger text-capitalize"><i class="bi bi-trash"></i> Hapus</a> -->

                                        <a href="<?= base_url('pages/kos/kelola_kos/hapus_konfirmasi/' . $kos->id) ?>"
                                            class="btn btn-danger text-capitalize" data-bs-toggle="modal"
                                            data-bs-target="#hapusKonfirmasiModal">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>

                                        <!-- Modal Konfirmasi Hapus -->
                                        <div class="modal fade" id="hapusKonfirmasiModal" tabindex="-1"
                                            aria-labelledby="hapusKonfirmasiModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusKonfirmasiModalLabel">Konfirmasi
                                                            Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data kos ini beserta semua isinya
                                                        ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('pages/kos/kelola_kos/hapus_konfirmasi/' . $kos->id) ?>"
                                                            class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END Modal Konfirmasi Hapus -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- ================= PESANAN KOS -->
            <!-- <h1>User id yang login saat ini :
                <?= $user_id ?>
            </h1> -->

            <div class="row g-5 mt-3">
                <div class="col-12">
                    <h6 class="section-title text-start text-primary text-uppercase">Kelola Pesanan Penyewa</h6>
                    <h1 class="mb-4">Kelola Pesanan Kos</h1>
                    <?php if (empty($data_kelola_kos)): ?>
                        <div class="col-5">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Anda masih belum memiliki penyewa untuk kos Anda!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                        </div>
                    <?php else: ?>


                    <?php endif; ?>



                    <p class="mb-4">Berikut adalah tabel data pengelolaan pesanan kos, yang mencakup pesanan dan
                        pembayaran dari setiap pengguna yang telah menyewa kosan.</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Durasi Sewa</th>
                                <th scope="col">Nomor Rekening & Bank Penyewa</th>
                                <th scope="col">Bukti Pembayaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            ?>
                            <?php $no = 1; ?>

                            <?php foreach ($data_kelola_kos as $pemesanan): ?>
                                <tr>
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td>
                                        <?= $pemesanan->nama_lengkap; ?>
                                        <!-- <?= $pemesanan->penyewa_id; ?> -->

                                    </td>
                                    <td>
                                        <?= $pemesanan->jenis_kelamin; ?>
                                    </td>
                                    <td>Rp.
                                        <?= number_format($pemesanan->harga, 0, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <?= $pemesanan->tanggal_pemesanan; ?>
                                    </td>
                                    <td>
                                        <?= $pemesanan->status; ?>
                                    </td>
                                    <td>
                                        <?= $pemesanan->durasi_sewa . " Hari"; ?>
                                    </td>
                                    <td>
                                        <?= $pemesanan->nomor_rekening_penyewa ?> ||
                                        <?= $pemesanan->bank_penyewa ?>
                                    </td>

                                    <td style="width: 25%;">
                                        <!-- Ubah href untuk mengarah ke URL gambar dan tambahkan target="_blank" -->
                                        <a href="<?= base_url() ?>uploads/bukti_pembayaran/<?= $pemesanan->bukti_pembayaran; ?>"
                                            target="_blank">
                                            <img src="<?= base_url() ?>uploads/bukti_pembayaran/<?= $pemesanan->bukti_pembayaran; ?>"
                                                class="img-thumbnail w-75" alt="Bukti Pembayaran">
                                        </a>
                                    </td>

                                    <td>
                                        <!-- <h6>ID PEMESANANsss (
                                            <?= $pemesanan->id ?>)
                                        </h6> -->
                                        <!-- <h6>ID (
                                            <?= $pemesanan->pemesanan_id ?>)
                                        </h6> -->

                                        <!-- <h6>sss (
                                            <?= $pemesanan->status ?>)
                                        </h6> -->
               
               
                                        <!-- <?php

                                        $tanggalHariIni = new DateTime(date('Y-m-d'));
                                        $tanggal_checkout = new DateTime($pemesanan->tanggal_checkout); // Pastikan ini adalah objek DateTime
                                    
                                        if ($tanggal_checkout < $tanggalHariIni) {
                                            echo "STATUS sudah tidak aktif";
                                        }
                                        ?> -->

                                        <form
                                            action="<?= base_url('pages/kos/pemesanan_kos/konfirmasi_sewa_kos/' . $pemesanan->pemesanan_id); ?>"
                                            method="post" id="konfirmasiForm">

                                            <input class="d-none" type="text" name="pemesanan_id"
                                                value="<?= $pemesanan->pemesanan_id ?>">
                                            <input class="d-none" type="text" name="status" value="aktif">


                                            <?php if ($pemesanan->status === "pending" || $pemesanan->status === "dalam proses"): ?>
                                                <button type="submit" class="btn btn-primary text-capitalize"
                                                    onclick="return confirm('Apakah Anda yakin ingin mengubah status?')">
                                                    <i class="fas fa-check-circle"></i> Ubah status
                                                </button>
                                            <?php endif; ?>

                                            <?php if ($pemesanan->status === "selesai"): ?>
                                                <button type="submit" class="btn btn-success text-capitalize"
                                                    onclick="return confirm('Apakah Anda yakin ingin mengubah status?')"
                                                    disabled>
                                                    <i class="fas fa-check-circle"></i> Selesai
                                                </button>
                                            <?php endif; ?>



                                            <?php if ($pemesanan->status == "aktif" && $tanggal_checkout > $tanggalHariIni): ?>
                                                <button type="submit" class="btn btn-primary text-capitalize" disabled>
                                                    <i class="fas fa-check-circle"></i> Ubah status
                                                </button>
                                            <?php endif; ?>


                                        </form>

                                        <form
                                            action="<?= base_url('pages/kos/pemesanan_kos/konfirmasi_selesai/' . $pemesanan->pemesanan_id); ?>"
                                            method="post" id="konfirmasiForm">

                                            <input class="d-none" type="text" name="pemesanan_id"
                                                value="<?= $pemesanan->pemesanan_id ?>">
                                            <input class="d-none" type="text" name="status" value="selesai">

                                            <?php if ($pemesanan->status == "aktif" && $tanggal_checkout < $tanggalHariIni): ?>
                                                <button type="submit" class="btn btn-danger text-capitalize">
                                                    <i class="fas fa-check-circle"></i> Ubah status selesai
                                                </button>
                                            <?php endif; ?>
                                        </form>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- About End -->