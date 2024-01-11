<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url() ?>assets/login/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/bootstrap.min.css">

  <!-- Style -->
  <link href="<?= base_url() ?>assets/login/css/style.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/img/icon-title.png" rel="icon">

  <title>Register</title>
</head>

<body>


  <div class="d-lg-flex half mb-5">
    <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url() ?>assets/login/images/bg_1.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container-fluid mt-3">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-9">
            <h3 style="text-decoration: underline;">Register <strong>KOS.ID</strong></h3>
            <p class="mb-4 text-dark">Pendaftaran di KOS.ID Kos memberi Anda akses eksklusif ke fasilitas dan layanan unggulan. Bergabunglah dengan kami hari ini dan temukan kenyamanan tempat tinggal yang luar biasa.</p>
            <form action="<?= base_url('Register') ?>" method="post" onsubmit="return validateForm()">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor KTP</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nomor KTP 16 Digit" id="ktp" name="nomor_ktp">
                    <?php echo form_error('nomor_ktp', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>

                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>

                    <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama" name="nama_lengkap">
                    <?php echo form_error('nama_lengkap', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
                    </select>
                    <?php echo form_error('jenis_kelamin', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">No Telpon</label>
                    <input type="number" class="form-control" placeholder="Nomor Telepon" id="telepon" name="no_telpon">
                    <?php echo form_error('no_telpon', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>

                </div>
              </div>


              <div class="form-group">
                <label for="exampleFormControlInput1">Alamat Lengkap</label>
                <textarea class="form-control" placeholder="Alamat Lengkap" id="alamat" rows="19" name="alamat_lengkap"></textarea>
                <?php echo form_error('alamat_lengkap', '<div class="text-danger small mt-2">', '</div>'); ?>
              </div>

              <div class="row">
                <div class="col-8">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email Address</label>
                    <input type="email" class="form-control" placeholder="Masukan Email anda" id="email" name="email">
                    <?php echo form_error('email', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>

                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                    <?php echo form_error('username', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    <?php echo form_error('password', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>

                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="password">Ulangi Password</label>
                    <input type="password" name="password2" class="form-control" placeholder="Password" id="password2" autocomplete="off">
                    <?php echo form_error('password2', '<div class="text-danger small mt-2">', '</div>'); ?>
                  </div>
                </div>

              </div>



              <div class="d-flex mb-3 justify-content-end">
              <a href="<?= base_url('auth/login') ?>">Sudah Punya Akun ? Login</a>

                            </div>
              <input type="submit" value="Daftar" class="btn btn-block btn-primary">
            </form>

          </div>
        </div>
      </div>
    </div>


  </div>




  <script src="<?= base_url() ?>assets/login/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url() ?>assets/login/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/login/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/login/js/main.js"></script>
</body>

</html>