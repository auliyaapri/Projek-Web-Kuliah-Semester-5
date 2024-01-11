<!-- ==================================================================== -->



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data User <u>
                <?= $user->nama_lengkap ?>
            </u></h1>
    </div><!-- End Page Title -->
    <!-- ================================= TABLE ================================= -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data User <u>
                                <?= $user->nama_lengkap ?>
                            </u></h5>

                        <form action="<?= base_url('admin/user/update_user/' . $user->id) ?>" method="post">
                            <!-- === KTP === -->
                            <div class="row mb-3">
                                <label for="inputKTP" class="col-sm-2 col-form-label">NO KTP</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nomor_ktp" class="form-control"
                                        value="<?= $user->nomor_ktp ?>">
                                </div>
                            </div>
                            <!-- === Nama Lengkap === -->
                            <div class="row mb-3">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nama_lengkap" class="form-control"
                                        value="<?= $user->nama_lengkap ?>">
                                </div>
                            </div>
                            <!-- === Jenis Kelamin === -->
                            <div class="row mb-3">
                                <label for "inputJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <input type="text" name="jenis_kelamin" class="form-control"
                                        value="<?= $user->jenis_kelamin ?>">
                                </div>
                            </div>
                            <!-- === No Telpon === -->
                            <div class="row mb-3">
                                <label for="inputNoTelpon" class="col-sm-2 col-form-label">No Telpon</label>
                                <div class="col-sm-6">
                                    <input type="text" name="no_telpon" class="form-control"
                                        value="<?= $user->no_telpon ?>">
                                </div>
                            </div>
                            <!-- === Alamat === -->
                            <div class="row mb-3">
                                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-6">
                                    <input type="text" name="alamat_lengkap" class="form-control"
                                        value="<?= $user->alamat_lengkap ?>">
                                </div>
                            </div>
                            <!-- === Email === -->
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" value="<?= $user->email ?>">
                                </div>
                            </div>
                            <!-- === Username === -->
                            <div class="row mb-3">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-6">
                                    <input type="text" name="username" class="form-control"
                                        value="<?= $user->username ?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>

                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>