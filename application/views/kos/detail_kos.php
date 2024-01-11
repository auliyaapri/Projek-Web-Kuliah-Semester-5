<div class="container-fluid bg-white p-0">

    <div class="container-fluid page-header mt-5 p-0" style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Detail Kos</h1>
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
                    <h6 class="section-title text-start text-primary text-uppercase">Detail Kos</h6>
                    <h1 class="mb-4">Detail Kos <span class="text-danger"> <?php foreach ($kos_detail as $kd) : ?>
                                <?= $kd->nama_kos; ?>
                            <?php endforeach; ?> </span></h1>
                    <h1 class="mb-4">
                        <?php
                        $username = $this->session->userdata('username');
                        ?>
                    </h1>
                    <h1>
                        <?= $this->session->userdata('role'); ?>
                    </h1>

                    <p class="mb-4">Ini adalah halaman detail kos, di sini Anda dapat melihat informasi detail tentang kosan Anda dan melakukan pengeditan jika diperlukan.</p>
                    <table class="table table-bordered mt-3">
                        <tr>
                            <th>Username</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>
                                    <?= $kd->username; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Kos-kosan</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>
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
                            <th>Alamat Kos</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>
                                    <?= $kd->alamat_kos; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>
                                    <?= $kd->kategori; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Jumlah Kamar</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>
                                    <?= $kd->jumlah_kamar; ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Harga / Perbulan</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>                                    
                                    <?= 'Rp. ' . number_format($kd->harga, 0, ',', '.') ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Peraturan</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>                                    
                                    <?= nl2br($kd->peraturan); ?>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>
                                <?php foreach ($kos_detail as $kd) : ?>                                    
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
                                            <?php foreach ($kos_detail as $kd) : ?>
                                                <?= $kd->fasilitas_kamar; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($kos_detail as $kd) : ?>
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
                                            <?php foreach ($kos_detail as $kd) : ?>                                                
                                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_1; ?>" style="height: 150px; width: 250px;">
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($kos_detail as $kd) : ?>
                                                                                                
                                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_2; ?>" style="height: 150px; width: 250px;">
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($kos_detail as $kd) : ?>                                                
                                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_3; ?>" style="height: 150px; width: 250px;">
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($kos_detail as $kd) : ?>                                                
                                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_4; ?>" style="height: 150px; width: 250px;">
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($kos_detail as $kd) : ?>                                                
                                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $kd->foto_kos_5; ?>" style="height: 150px; width: 250px;">
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                    </table>
                    <div class="d-flex justify-content-end">
                        <?php foreach ($kos_detail as $kd) : ?>
                            <a href="<?= base_url('pages/kos/kelola_kos/edit/' . $kd->kos_id) ?>" class="btn btn-md btn-warning me-2 text-capitalize">Edit</a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->