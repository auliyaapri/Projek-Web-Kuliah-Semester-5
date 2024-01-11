<div class="container-fluid bg-white p-0">

    <!-- Page Header Start -->
    <div class="container-fluid page-header mt-5 p-0" style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Buka Kos</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12">
                    <h6 class="section-title text-start text-primary text-uppercase">Input Membuka Kos</h6>
                    <h1 class="mb-4">Input Data Kos</h1>
                    <!-- <h1 class="mb-4"> <p>User ID: <?= $user_id ?></p> </h1> -->
                    <p class="mb-4">Silakan masukan data kos anda dengan lengkap agar orang yang membutuhkan mudah mencarinya.</p>
                    <form action="<?= base_url() . 'pages/buka_kos/tambah_kos'; ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Nama Kos</label>
                                    <input type="text" class="form-control text-capitalize" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_kos">
                                    <?php echo form_error('nama_kos', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-6 d-none">
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_id" value="<?= $user_id ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Kategori</label>
                                        <select class="form-select" aria-label="Default select example" name="kategori">
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                        <?php echo form_error('kategori', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- ========== Nomor Rekekning  ========== -->

                            <!-- ========== Alamat  ========== -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label fw-bold">Alamat Kos</label>
                                        <textarea type="text" class="form-control" id="alamat_kos" aria-describedby="alamat_kos" name="alamat_kos"> </textarea>
                                        <?php echo form_error('alamat', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>
                            <!-- ========== Alamat  ========== -->


                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Nomor Rekening Anda</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_rekening">
                                    <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Bank Anda</label>
                                    <select class="form-select" aria-label="Default select example" name="bank">
                                            <option value="">-- Pilih Bank --</option>
                                            <option value="BCA">BCA</option>
                                            <option value="BRI">BRI</option>
                                            <option value="BNI">BNI</option>
                                            <option value="CIMB Niaga">CIMB Niaga</option>
                                            <option value="Danamon">Danamon</option>
                                            <option value="Permata">Permata</option>
                                            <option value="Mega">Mega</option>
                                            <option value="OCBC NISP">OCBC NISP</option>
                                        </select>
                                    <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>
                            </div>
                            <!-- ========== Nomor Rekekning  ========== -->

                            <!-- ========== FASILITAS KAMAR  ========== -->
                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Fasilitas Kamar</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox1" value="AC">
                                            <label class="form-check-label" for="checkbox1">
                                                AC
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox2" value="Meja Belajar">
                                            <label class="form-check-label" for="checkbox2">
                                                Meja Belajar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox3" value="Meja Rias">
                                            <label class="form-check-label" for="checkbox3">
                                                Meja Rias
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox4" value="Kasur">
                                            <label class="form-check-label" for="checkbox4">
                                                Kasur
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox5" value="TV">
                                            <label class="form-check-label" for="checkbox5">
                                                TV
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox6" value="Sofa">
                                            <label class="form-check-label" for="checkbox6">
                                                Sofa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox7" value="Dispenser">
                                            <label class="form-check-label" for="checkbox7">
                                                Dispenser
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox8" value="Lemari Baju">
                                            <label class="form-check-label" for="checkbox8">
                                                Lemari Baju
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" id="checkbox9" value="Jendela">
                                            <label class="form-check-label" for="checkbox9">
                                                Jendela
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_error('fasilitas_kamar[]', '<div class="text-danger small mt-2">', '</div>'); ?>
                            </div>
                            <!-- ========== END FASILITAS KAMAR  ========== -->
                            <!-- ========== FASILITAS KAMAR MANDI  ========== -->
                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Fasilitas Kamar Mandi</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox1" value="K. Mandi Dalam">
                                            <label class="form-check-label" for="checkbox1">
                                                K. Mandi Dalam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox2" value="Shower">
                                            <label class="form-check-label" for="checkbox2">
                                                Shower
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox3" value="Kloset Duduk">
                                            <label class="form-check-label" for="checkbox3">
                                                Kloset Duduk
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox4" value="Kloset Jongkok">
                                            <label class="form-check-label" for="checkbox4">
                                                Kloset Jongkok
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox5" value="Wastafel">
                                            <label class="form-check-label" for="checkbox5">
                                                Wastafel
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox6" value="Ember Mandi">
                                            <label class="form-check-label" for="checkbox6">
                                                Ember Mandi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox7" value="K. Mandi Luar">
                                            <label class="form-check-label" for="checkbox7">
                                                K. Mandi Luar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox8" value="Bak Mandi">
                                            <label class="form-check-label" for="checkbox8">
                                                Bak Mandi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="fasilitas_kamar_mandi[]" id="checkbox9" value="Air Panas">
                                            <label class="form-check-label" for="checkbox9">
                                                Air Panas
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_error('fasilitas_kamar_mandi', '<div class="text-danger small mt-2">', '</div>'); ?>
                            </div>

                            <!-- ========== END FASILITAS KAMAR MANDI  ========== -->


                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Jumlah Kamar</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah_kamar">
                                    <?php echo form_error('jumlah_kamar', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>

                                <div class="col-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Harga / Perbulan</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
                                    <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mt-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Peraturan</label>
                                    <textarea name="peraturan" id="" cols="30" rows="10" class="form-control"></textarea>
                                    <?php echo form_error('peraturan', '<div class="text-danger small mt-2">', '</div>'); ?>

                                </div>

                                <div class="col-12 mt-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Deskripsi Kos kosan</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                                    <?php echo form_error('deskripsi', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="foto1" class="form-label fw-bold">Foto 1</label>
                                    <input type="file" class="form-control bg-transparent" id="foto1" name="foto_kos_1">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="foto2" class="form-label fw-bold">Foto 2</label>
                                    <input type="file" class="form-control bg-transparent" id="foto2" name="foto_kos_2">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="foto3" class="form-label fw-bold">Foto 3</label>
                                    <input type="file" class="form-control bg-transparent" id="foto3" name="foto_kos_3">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="foto4" class="form-label fw-bold">Foto 4</label>
                                    <input type="file" class="form-control bg-transparent" id="foto4" name="foto_kos_4">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="foto5" class="form-label fw-bold">Foto 5</label>
                                    <input type="file" class="form-control bg-transparent" id="foto5" name="foto_kos_5">
                                </div>

                            </div>
                            <?php echo form_error('foto', '<div class="text-danger small mt-2">', '</div>'); ?>
                            <div class="col-12 mt-4">
                                <button type="submit" class="w-100 btn btn-primary text-capitalize">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-12">
                    <h6 class="section-title text-start text-primary text-uppercase">Info Membuka Kos</h6>
                    <h1 class="mb-4">Info Membuka Kos</h1>
                    <ul>
                        <li><p>Isikan nama kos atau nama pemilik dari kos agar pengguna yang lain mudah untuk mencarinya serta isikan kategori kos agar dapat membatasi user yang ingin memesan sesuai kategori saja yang dibolehkan.</p></li>
                        <!-- Tambahkan tombol Lihat Selengkapnya -->
                        <li><p>Isikan Fasilitas yang disediakan oleh kos anda sehingga pengguna bisa mengetahui dan berminat untuk memesan kos anda.</p></li>
                        <li>
                            <p>Isikan jumlah kamar dan harga kos anda seperti diketahui harga ini menjadi prioritas pertama untuk pengguna mencarinya.</p>
                        </li>
                        <li>
                            <p> Isikan keterangan atau bisa juga peraturan yang ada dikos anda sehingga sebelum pengguna lain memesan dia sudah tau dengan peraturan atau keterangan dikos anda..</p>
                        </li>

                        <li>
                            <p>Pilihlah kampus terdekat dengan kos anda,biasanya pengguna menginginan kos yang terdekat dengan kampus atau tempat kerjanya.</p>
                        </li>
                        <li>
                            <p>Lengkapi kos anda dengan foto yang sebenarnya kami menyediakan 3 tempat untuk 3 foto kos anda diharapkan masing-masing foto dengan posisi yang berbeda.</p>
                        </li>
                        <li>
                            <p>Dengan mendaftar berarti anda sudah bersedia berkerja sama dengan kos awak dan diharapkan nomor telepon anda selalu aktif untuk kami beritahu jika ada informasi yang harus kami beritahu kepada anda.</p>
                        </li>
                        <li>
                            <p>Pastikan data kos anda sesuai dengan yang diinginan kos awak serta tidak melanggar undang-undang ,jika melanggar kos anda tidak akan kami proses atau tidak ditampilkan dimenu utama.</p>
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
<!-- About End -->