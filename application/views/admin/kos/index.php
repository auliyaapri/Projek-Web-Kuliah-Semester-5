<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Daftar Kos-kosan & User Pemilik Kos</h1> 
  </div><!-- End Page Title -->
  <!-- ================================= TABLE ================================= -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Daftar Kosan User Table</h5>
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Tanggal Buka Kos</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php $uniqueUsernames = array(); ?>
                <?php foreach ($koss as $kos) : ?>
                  <?php if (!in_array($kos->username, $uniqueUsernames)) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $kos->username; ?></td>
                      <td>                        
                        <?= date("F, j, Y", strtotime($kos->tanggal_buka)) ?>
                      </td> <!-- Mengambil nama pengguna -->
                      <td>
                        <a href="<?= base_url('admin/kos/data_kos/' . $kos->user_id) ?>" class="btn btn-primary"><i class="bi bi-eye"></i> Lihat Lainnya</a>
                      </td>
                    </tr>
                    <?php $uniqueUsernames[] = $kos->username; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
              </tbody>
            </table>


            <!-- End Default Table Example -->
          </div>
        </div>


      </div>

    </div>
  </section>

</main>