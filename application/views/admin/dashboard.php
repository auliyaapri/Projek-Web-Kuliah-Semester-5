<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Kos</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house"></i>
                                    </div>
                                    <div class="ps-3">

                                        <h6>
                                            <?= $this->model_kos->getKosWhere()->num_rows(); ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Saldo Pendapatan</h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php
                                        $biayaLayanan = $this->model_pemesanan->getBiayaLayanan();
                                        if (!empty($biayaLayanan)) {
                                            $totalBiayaLayanan = 0;
                                            foreach ($biayaLayanan as $row) {
                                                $totalBiayaLayanan += $row->biaya_layanan;
                                            }
                                            // Mengonversi total biaya layanan ke format rupiah
                                            $formattedTotal = "Rp " . number_format($totalBiayaLayanan, 0, ',', '.');
                                            echo "<h6>$formattedTotal</h6>";
                                        } else {
                                            echo "<h6>Rp 0</h6>"; // Jika tidak ada data biaya layanan.
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">


                            <div class="card-body">
                                <h5 class="card-title">Total User</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            <?= $this->model_user->getUserWhere(['role' => 'user'])->num_rows(); ?>
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>



</main><!-- End #main -->