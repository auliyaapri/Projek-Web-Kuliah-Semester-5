<div class="container-fluid bg-white p-0">

    <div class="container-fluid page-header mt-5 p-0"
        style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); ">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-4 text-white mb-3 animated slideInDown mt-5">Edit Kos</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Edit Kos Start -->
    <div class="container-xxl py-5">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Edit Kos</h6>
                        <h1 class="mb-4">Edit <span class="text-danger">
                                <?php foreach ($kos_edit_detail as $ked): ?>
                                    <?= $ked->nama_kos; ?>
                                <?php endforeach; ?>
                            </span></h1>
                        <!-- <h1 class="mb-4">
                            <p>User ID:
                                <?= $user_id ?>
                            </p>
                        </h1> -->
                        <p class="mb-4">Silakan masukan data kos anda dengan lengkap agar orang yang membutuhkan mudah
                            mencarinya.</p>
                        <form action="<?= base_url() . 'pages/kos/kelola_kos/update/' . $ked->id ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Nama Kos /
                                            Pemilik</label>
                                        <input class="form-control" type="text" name="nama_kos"
                                            value="<?= $ked->nama_kos; ?>">
                                        <?php echo form_error('nama_kos', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label fw-bold">Kategori</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="kategori">
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="Pria" <?php if ($ked->kategori == 'Pria')
                                                    echo 'selected'; ?>>Pria</option>
                                                <option value="Wanita" <?php if ($ked->kategori == 'Wanita')
                                                    echo 'selected'; ?>>Wanita</option>

                                            </select>
                                            <?php echo form_error('kategori', '<div class="text-danger small mt-2">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Alamat Kos </label>
                                        <textarea name="alamat_kos" id="" cols="30" rows="10"
                                            class="form-control"><?= $ked->alamat_kos ?></textarea>
                                        <?php echo form_error('alamat_kos', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Nomor Rekening
                                            Anda</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="nomor_rekening"
                                            value="<?= $ked->nomor_rekening; ?>">
                                        <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Bank Anda</label>
                                        <select class="form-select" aria-label="Default select example" name="bank">
                                            <option value="">-- Pilih Bank --</option>
                                            <option value="BCA" <?php if ($ked->bank == 'BCA')
                                                echo 'selected'; ?>>BCA
                                            </option>
                                            <option value="BRI" <?php if ($ked->bank == 'BRI')
                                                echo 'selected'; ?>>BRI
                                            </option>
                                            <option value="BNI" <?php if ($ked->bank == 'BNI')
                                                echo 'selected'; ?>>BNI
                                            </option>
                                            <option value="CIMB Niaga" <?php if ($ked->bank == 'CIMB Niaga')
                                                echo 'selected'; ?>>CIMB Niaga</option>
                                            <option value="Danamon" <?php if ($ked->bank == 'Danamon')
                                                echo 'selected'; ?>>Danamon</option>
                                            <option value="Permata" <?php if ($ked->bank == 'Permata')
                                                echo 'selected'; ?>>Permata</option>
                                            <option value="Mega" <?php if ($ked->bank == 'Mega')
                                                echo 'selected'; ?>>Mega
                                            </option>
                                            <option value="OCBC NISP" <?php if ($ked->bank == 'OCBC NISP')
                                                echo 'selected'; ?>>OCBC NISP</option>
                                        </select>

                                        <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>


                                <!-- ========== FASILITAS KAMAR  ========== -->

                                <div class="col-12 mt-3">
                                    <label class="form-label fw-bold">Fasilitas Kamar</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox1" value="AC" <?php if (strpos($ked->fasilitas_kamar, 'AC') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox1">
                                                    AC
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox2" value="Meja Belajar" <?php if (strpos($ked->fasilitas_kamar, 'Meja Belajar') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox2">
                                                    Meja Belajar
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox3" value="Meja Rias" <?php if (strpos($ked->fasilitas_kamar, 'Meja Rias') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox3">
                                                    Meja Rias
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox4" value="Kasur" <?php if (strpos($ked->fasilitas_kamar, 'Kasur') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox4">
                                                    Kasur
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox5" value="TV" <?php if (strpos($ked->fasilitas_kamar, 'TV') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox5">
                                                    TV
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox6" value="Sofa" <?php if (strpos($ked->fasilitas_kamar, 'Sofa') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox6">
                                                    Sofa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox7" value="Dispenser" <?php if (strpos($ked->fasilitas_kamar, 'Dispenser') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox7">
                                                    Dispenser
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox8" value="Lemari Baju" <?php if (strpos($ked->fasilitas_kamar, 'Lemari Baju') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox8">
                                                    Lemari Baju
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]"
                                                    id="checkbox9" value="Jendela" <?php if (strpos($ked->fasilitas_kamar, 'Jendela') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox9">
                                                    Jendela
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo form_error('fasilitas_kamar', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>
                                <!-- ========== END FASILITAS KAMAR  ========== -->

                                <!-- ========== FASILITAS KAMAR MANDI  ========== -->
                                <div class="col-12 mt-3">
                                    <label class="form-label fw-bold">Fasilitas Kamar Mandi</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox1" value="K. Mandi Dalam"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'K. Mandi Dalam') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox1">
                                                    K. Mandi Dalam
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox2" value="Shower" <?php if (strpos($ked->fasilitas_kamar_mandi, 'Shower') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox2">
                                                    Shower
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox3" value="Kloset Duduk"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'Kloset Duduk') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox3">
                                                    Kloset Duduk
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox4" value="Kloset Jongkok"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'Kloset Jongkok') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox4">
                                                    Kloset Jongkok
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox5" value="Wastafel" <?php if (strpos($ked->fasilitas_kamar_mandi, 'Wastafel') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox5">
                                                    Wastafel
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox6" value="Ember Mandi"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'Ember Mandi') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox6">
                                                    Ember Mandi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox7" value="K. Mandi Luar"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'K. Mandi Luar') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox7">
                                                    K. Mandi Luar
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox8" value="Bak Mandi"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'Bak Mandi') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox8">
                                                    Bak Mandi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="fasilitas_kamar_mandi[]" id="checkbox9" value="Air Panas"
                                                    <?php if (strpos($ked->fasilitas_kamar_mandi, 'Air Panas') !== false)
                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="checkbox9">
                                                    Air Panas
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo form_error('fasilitas_kamar_mandi', '<div class="text-danger small mt-2">', '</div>'); ?>
                                </div>

                                <!-- ========== END FASILITAS KAMAR MANDI  ========== -->

                                <!-- ========== JUMLAH KAMAR & HARGA  ========== -->
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Jumlah Kamar</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="jumlah_kamar"
                                            value="<?= $ked->jumlah_kamar ?>">
                                        <?php echo form_error('jumlah_kamar', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Harga /
                                            Perbulan</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="harga" value="<?= $ked->harga ?>">
                                        <?php echo form_error('harga', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>
                                </div>
                                <!-- ========== END JUMLAH KAMAR & HARGA  ========== -->

                                <!-- ========== PERATURAN & DESKRIPSI  ========== -->
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Peraturan</label>
                                        <textarea name="peraturan" id="" cols="30" rows="10"
                                            class="form-control"><?= $ked->peraturan ?></textarea>

                                        <?php echo form_error('peraturan', '<div class="text-danger small mt-2">', '</div>'); ?>

                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Deskripsi Kos
                                            kosan</label>
                                        <textarea name="deskripsi" id="" cols="30" rows="10"
                                            class="form-control"><?= $ked->deskripsi ?></textarea>
                                        <?php echo form_error('deskripsi', '<div class="text-danger small mt-2">', '</div>'); ?>
                                    </div>

                                </div>
                                <!-- ========== END PERATURAN & DESKRIPSI  ========== -->

                                <!-- ========== FOTO KOS  ========== -->
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <label for="foto1" class="form-label fw-bold">Foto 1</label>
                                        <input class="form-control bg-transparent" type="file" name="foto_kos_1"
                                            value="<?= $ked->foto_kos_1; ?>">
                                        <img class="mt-2 img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                            src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $ked->foto_kos_1; ?>"
                                            style="height: 200px;">

                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="foto2" class="form-label fw-bold">Foto 2</label>
                                        <input class="form-control bg-transparent" type="file" name="foto_kos_2"
                                            value="<?= $ked->foto_kos_2; ?>">
                                        <img class="mt-2 img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                            src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $ked->foto_kos_2; ?>"
                                            style="height: 200px;">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="foto3" class="form-label fw-bold">Foto 3</label>
                                        <input class="form-control bg-transparent" type="file" name="foto_kos_3"
                                            value="<?= $ked->foto_kos_3; ?>">
                                        <img class="mt-2 img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                            src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $ked->foto_kos_3; ?>"
                                            style="height: 200px;">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="foto4" class="form-label fw-bold">Foto 4</label>
                                        <input class="form-control bg-transparent" type="file" name="foto_kos_4"
                                            value="<?= $ked->foto_kos_4; ?>">
                                        <img class="mt-2 img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                            src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $ked->foto_kos_4; ?>"
                                            style="height: 200px;">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="foto5" class="form-label fw-bold">Foto 5</label>
                                        <input class="form-control bg-transparent" type="file" name="foto_kos_5"
                                            value="<?= $ked->foto_kos_5; ?>">
                                        <img class="mt-2 img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                            src="<?= base_url() . 'uploads/' . 'foto_kosan' . '/' . $ked->foto_kos_5; ?>"
                                            style="height: 200px;">
                                    </div>

                                </div>
                                <!-- ========== END FOTO KOS  ========== -->

                                <?php echo form_error('foto', '<div class="text-danger small mt-2">', '</div>'); ?>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="w-100 btn btn-primary text-capitalize">Simpan
                                        Perubahan</button>
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
            </div>
        </div>
    </div>
</div>
<!-- Edit Kos End -->