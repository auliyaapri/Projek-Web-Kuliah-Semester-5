<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/login/fonts/icomoon/style.css">
    <link href="<?= base_url() ?>assets/img/icon-title.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/bootstrap.min.css">

    <!-- Style -->
    <link href="<?= base_url() ?>assets/login/css/style.css" rel="stylesheet">


    <title>Login</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url() ?>assets/login/images/bg_1.png');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login ke <strong>KOS.ID</strong></h3>
                        <p class="mb-4 text-dark">Cari kosan terbaik untukmu. Sambut ruang tinggal impianmu.</p>
                        <?= $this->session->flashdata('salah_login'); ?>
                        
                        <form action="<?= base_url('auth/login') ?>" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>

                                <input type="text" name="username" class="form-control" placeholder="Your Username" id="username" autocomplete="off">
                                <?php echo form_error('username', '<div class="text-danger small mt-2">', '</div>'); ?>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                                <?php echo form_error('password', '<div class="text-danger small mt-2">', '</div>'); ?>
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="<?= base_url('register') ?>">Daftar Akun</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

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
    <script src="<?=base_url()?>assets/sweet-alert/sweetalert2.all.min.js"></script>
</body>

</html>