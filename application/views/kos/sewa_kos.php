<div class="container detail_kos pt-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Slider for photos -->
            <div id="photoSlider" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#photoSlider" data-bs-slide-to="0" class="active" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="1" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="2" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="3" style="cursor: pointer;"></li>
                    <li data-bs-target="#photoSlider" data-bs-slide-to="4" style="cursor: pointer;"></li>
                    <!-- Add more indicators as needed -->
                </ol>
                <div class="carousel-inner rounded float-left">
                    <?php foreach ($kos_detail as $kd) : ?>
                        <div class="carousel-item active">
                            <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_1; ?>" class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd) : ?>
                        <div class="carousel-item">
                            <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_2; ?>" class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd) : ?>
                        <div class="carousel-item">
                            <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_3; ?>" class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd) : ?>
                        <div class="carousel-item">
                            <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_4; ?>" class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($kos_detail as $kd) : ?>
                        <div class="carousel-item">
                            <img class="img-fluid rounded w-100" src="<?= base_url() . 'uploads/' . str_replace(' ', '_', $kd->nama_kos) . '/' . $kd->foto_kos_5; ?>" class="d-block w-100" alt="Image 1">
                        </div>
                    <?php endforeach; ?>


                </div>
                <a class="carousel-control-prev" href="#photoSlider" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#photoSlider" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <blockquote class="default mb-3 mt-3">
                <h4>Peraturan dikos :</h4>

                <?php foreach ($kos_detail as $kd) : ?>
                    <?= nl2br($kd->peraturan); ?>
                <?php endforeach; ?>


            </blockquote>
            <blockquote class="default mb-3">
                <h4>Spesifikasi Tipe Kamar :</h4>
                <ol>
                    <li>2.7 x 5 meter.</li>
                    <li>Tidak termasuk listrik.</li>
                </ol>
            </blockquote>
            <blockquote class="default mb-3">
                <h4>Fasilitas Kamar :</h4>
                <ol>
                    <?php $count = 1; // Inisialisasi nomor urutan 
                    ?>
                    <?php foreach ($kos_detail as $kd) : ?>
                        <?php $fasilitas_kamar = explode(', ', $kd->fasilitas_kamar); ?>
                        <?php foreach ($fasilitas_kamar as $fasilitas) : ?>
                            <li><?= $fasilitas; ?></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ol>
            </blockquote>


            <!-- =========== -->
            <blockquote class="default mb-3">
                <h4>Fasilitas Kamar Mandi:</h4>
                <ol>
                    <?php $count = 1; // Inisialisasi nomor urutan 
                    ?>
                    <?php foreach ($kos_detail as $kd) : ?>
                        <?php $fasilitas_kamar_mandi = explode(', ', $kd->fasilitas_kamar_mandi); ?>
                        <?php foreach ($fasilitas_kamar_mandi as $fasilitas) : ?>
                            <li><?= $fasilitas; ?></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ol>
            </blockquote>
            <!-- =========== -->

            <blockquote class="default mb-3">
                <h4>Cerita pemilik tentang kos ini :</h4>

                <?php foreach ($kos_detail as $kd) : ?>
                    <?php
                    $textFromDatabase = $kd->deskripsi;
                    $processedText = nl2br($textFromDatabase);
                    ?>
                    <p><?= $processedText ?></p>
                <?php endforeach; ?>
            </blockquote>
        </div>

        <div class="col-md-6">
            <div class="card w-75">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        <u>
                            <?php foreach ($kos_detail as $kd) : ?>
                                <?= $kd->nama_kos; ?>
                            <?php endforeach; ?>
                        </u>
                    </h3>

                    <h4 class="card-text font-weight-bold" id="harga_perbulan">
                        Harga : Rp.
                        <?php foreach ($kos_detail as $kd) : ?>

                            <?php $formatted_number = $kd->harga;

                            $title_harga = number_format($formatted_number, 3, ',', '.');
                            echo $title_harga; // Output: 1.000

                            $angka = number_format($formatted_number, 0, ',', '.');;
                            $ubahJadiTeks = strval($title_harga);
                            ?>
                        <?php endforeach; ?>
                    </h4>


                    <form action="<?= base_url('pages/kos/sewa_kos') ?>" method="post">
                        <div class="form-group mt-3">
                            <label for="startDate" class="mb-2">Mulai Kos</label> <br>
                            <input type="date" class="form-control" id="startDate" aria-describedby="emailHelp" name="tanggal_pemesanan">
                            <?php echo form_error('tanggal_pemesanan', '<div class="text-danger small mt-2">', '</div>'); ?>


                        </div>

                        <div class="form-group w-100 mt-3">
                            <label for="paymentOption" class="mb-2">Pilihan Pembayaran</label> <br>

                            <select class="form-select" aria-label="Default select example" id="paymentOption">
                                <option selected>Open this select menu</option>
                                <option value="30">Per Bulan</option>
                                <option value="90">Per 3 Bulan</option>
                                <option value="180">Per 6 Bulan</option>
                                <option value="365">Per Tahun</option>
                            </select>
                        </div>




                        <!-- <p class="card-text mt-3" id="totalPrice">Total Harga: Rp </p> Harga dalam Rupiah -->
                        <div class="form-group w-100 mt-3">
                            <label for="totalPriceInput" class="mb-2">Total Harga</label>
                            <input type="text" class="form-control" id="totalPriceInput" readonly>
                        </div>





                        <div class="form-group mt-3 mb-3">
                            <label for="tanggalBerakhirInput">Anda akan berakhir pada tanggal</label>
                            <input type="text" class="form-control" id="tanggalBerakhirInput" readonly>
                        </div>


                        <label for="paymentOption" class="mb-2 text-bg-danger" style="font-size: 15px;"><b> Catatan :</b> <br> <i> Dalam opsi pembayaran ini, sudah mencakup berapa lama Anda berencana untuk menyewa kamar kos ini. </i></label> <br>
                        <a href="https://wa.me/08128363160" class="btn btn-detail-contact text-capitalize w-100">
                            <i class="fab fa-whatsapp icon-detail-contact"></i> Tanya Pemilik Melalui WhatsApp
                        </a>

                        <button type="submit" class="w-100 btn btn-primary mt-3 text-capitalize" id="sewaButton">Sewa Kos</button>
                    </form>


                </div>
            </div>
        </div>


    </div>
    <div class="row justify-content-between">
        <h2 class="mb-5 text-center">Info ! Transaksi pemesanan</h2>
        <div class="col-md-3 d-flex align-items-start justify-content-between">
            <h2>
                <i class="fas fa-money-check-alt pe-3 text-warning "></i>
            </h2>
            <div class="card border-0">
                <h5>Pembayaran</h5>
                <p>Lakukan transaksi pembayaran ke bank yang telah ditentukan.</p>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-start justify-content-between">
            <h2>
                <i class="fas fa-check-circle pe-3 text-warning"></i>
            </h2>
            <div class="card border-0">
                <h5>Konfirmasi pembayaran</h5>
                <p>Lakukan konfirmasi pembayaran untuk menyelesaikan pemesanan kos Anda.</p>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-start justify-content-between">
            <h2>
                <i class="fas fa-print pe-3 text-warning"></i>
            </h2>
            <div class="card border-0">
                <h5>Cetak Bukti</h5>
                <p>Cetak bukti pemesanan Anda dan selanjutnya serahkan kepada pemilik kos untuk mendapatkan kos yang dipesan.</p>
            </div>
        </div>
    </div>




</div>










<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<?php
$oke = $formatted_number

?>

<script>
    $(document).ready(function() {
        // Fungsi untuk menghitung total harga berdasarkan opsi pembayaran yang dipilih
        $("#paymentOption").change(function() {
            var selectedOption = $(this).val();
            var hargaPerBulan = <?= $oke ?>; // Ganti dengan harga yang sesuai dalam Rupiah
            var totalHarga;
            if (selectedOption === "30") {
                totalHarga = hargaPerBulan;
            } else if (selectedOption === "90") {
                totalHarga = hargaPerBulan * 3;
            } else if (selectedOption === "180") {
                totalHarga = hargaPerBulan * 6;
            } else if (selectedOption === "365") {
                totalHarga = hargaPerBulan * 12;
            }

            // Format total harga dalam Rupiah
            var formattedHarga = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(totalHarga);
            // $("#totalPrice").text("Total Harga: " + formattedHarga);
            $("#totalPriceInput").val(formattedHarga);

        });


        // Fungsi untuk menangani tombol "Sewa Kos"
        // $("#sewaButton").click(function() {
        //     // Di sini Anda dapat menambahkan logika untuk mengirim data sewa ke server atau melakukan tindakan lain sesuai kebutuhan Anda.
        //     alert("Kamar telah disewa!");
        // });
    });
</script>

<script>
    document.getElementById('startDate').addEventListener('input', calculateEndDate);
    document.getElementById('paymentOption').addEventListener('change', calculateEndDate);

    function calculateEndDate() {
        var startDate = new Date(document.getElementById('startDate').value);
        var paymentOption = parseInt(document.getElementById('paymentOption').value);

        // Buat tanggal berakhir dengan mempertimbangkan jumlah hari dalam bulan
        var endDate = new Date(startDate);
        endDate.setDate(startDate.getDate() + paymentOption);

        // Format tanggal ke "YYYY-MM-DD"
        var year = endDate.getFullYear();
        var month = String(endDate.getMonth() + 1).padStart(2, '0');
        var day = String(endDate.getDate()).padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;

        // document.getElementById('tanggalBerakhir').textContent = formattedDate;
        document.getElementById('tanggalBerakhirInput').value = formattedDate;

    }
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>