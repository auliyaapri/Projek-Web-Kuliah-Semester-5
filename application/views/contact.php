<!-- Page Header Start -->
<div class="container-fluid page-header mt-5 p-0"
    style="background-image: url(<?= base_url('assets/img/banner-page.png') ?>); background-position: center; ">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown mt-5">Hubungi Kami</h1>
        </div>
    </div>
</div>


<!-- Page Header End -->




<!--================Contact Area =================-->
<section class="contact_area padding_bottom">
    <div class="container">
        <iframe class="w-100 mt-5"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0002747109256!2d106.90800107483632!3d-6.263692361321549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32af6703c71%3A0xf89cd7f58da5243f!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Jatiwaringin!5e0!3m2!1sid!2sid!4v1696816470045!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="row mt-4">
            <div class="col">
                <h3>Kirim Pesan ke Kami.</h3>
                <p>Silahan anda kirim pesan kepada kami jika anda ada saran atau pun keluhan!</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Indonesia </h6>
                        <p>Jl. Raya Jatiwaringin No.18, RT.009/RW.005, Jaticempaka, Kec. Pd. Gede, Kota Bks, Jawa Barat
                        </p>
                    </div>
                    <div class="info_item d-flex">
                        <i class="fas fa-phone me-3"></i>
                        <h6><a href="#">089677058522</a></h6>
                    </div>
                    <div class="info_item d-flex">
                        <i class="fas fa-envelope me-3"></i>
                        <h6><a href="#">kos.id@gmail.com</a></h6>

                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <form class="row g-3" action="<?= base_url('pages/contact/kirim_pesan') ?>" method="POST">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control border border-dark rounded" id="nama" name="nama"
                                placeholder="Nama anda">

                            <?php echo form_error('nama', '<div class="text-danger small mt-2">', '</div>'); ?>

                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control border border-dark rounded" id="email" name="email"
                                placeholder="Email anda">
                            <?php echo form_error('email', '<div class="text-danger small mt-2">', '</div>'); ?>

                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control border border-dark rounded" id="subjek" name="subjek"
                                placeholder="Subjek Pesan">
                            <?php echo form_error('subjek', '<div class="text-danger small mt-2">', '</div>'); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <textarea class="form-control border border-dark rounded" name="isi_pesan" id="message"
                                rows="8" placeholder="Pesan anda"></textarea>
                            <?php echo form_error('isi_pesan', '<div class="text-danger small mt-2">', '</div>'); ?>

                        </div>
                    </div>
                    <div class="col-md-12 text-end">
                        <button type="submit" value="submit" class="btn btn-warning text-capitalize rounded-3">Kirim
                            Pesan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!--================Contact Area =================-->

<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Thank you</h2>
                <p>Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Sorry !</h2>
                <p> Something went wrong </p>
            </div>
        </div>
    </div>
</div>
<!--================End Contact Success and Error message Area =================-->