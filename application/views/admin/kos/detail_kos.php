<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Kos</h1>
    </div><!-- End Page Title -->
    <!-- ================================= TABLE ================================= -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kos Detail</h5>
                        <!-- ===== Button Kembali ===== -->
                        <button class="btn btn-danger btn-sm" onclick="goBack()">Kembali</button>
                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
                        <!-- ===== Button Kembali ===== -->
                        <table class="table table-bordered mt-3">
                            <tr>
                                <th>Username</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= $kd->username; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Kos-kosan</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= $kd->nama_kos; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Nomor rekening & Bank</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= $kd->nomor_rekening; ?> || <?= $kd->bank; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat Kos-kosan</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= $kd->alamat_kos; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= $kd->kategori; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jumlah Kamar</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= $kd->jumlah_kamar; ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= 'Rp.' . ' ' . number_format($kd->harga, 0, ',', '.'); ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Peraturan</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= nl2br($kd->peraturan); ?>

                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>
                                    <?php foreach ($kos_detail as $kd): ?>
                                        <?= nl2br($kd->deskripsi); ?>

                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Fasilitas</th>
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Kamar</th>
                                            <th>Kamar Mandi</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>
                                                    <?= $kd->fasilitas_kamar; ?>
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>
                                                    <?= $kd->fasilitas_kamar_mandi; ?>
                                                <?php endforeach; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th>Gambar</th>
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Foto kos 1</th>
                                            <th>Foto kos 2</th>
                                            <th>Foto kos 3</th>
                                            <th>Foto kos 4</th>
                                            <th>Foto kos 5</th>

                                        </tr>
                                        <tr>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>                                                   
                                                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s"
                                                        src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_1; ?>"
                                                        style="height: 150px; width: 250px;">
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>
                                                   
                                                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s"
                                                        src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_2; ?>"
                                                        style="height: 150px; width: 250px;">
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>                                                   
                                                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s"
                                                        src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_3; ?>"
                                                        style="height: 150px; width: 250px;">
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>                                                   
                                                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s"
                                                        src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_4; ?>"
                                                        style="height: 150px; width: 250px;">
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($kos_detail as $kd): ?>                                                   
                                                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s"
                                                        src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_5; ?>"
                                                        style="height: 150px; width: 250px;">
                                                <?php endforeach; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </section>

</main>