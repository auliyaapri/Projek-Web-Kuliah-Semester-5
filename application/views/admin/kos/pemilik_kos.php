<main id="main" class="main">

  <div class="pagetitle mt-5">
    <h1>
      <?php foreach ($koss as $kos): ?>
        Pemlik Kos <span class="text-capitalize fw-bold">
          <?= $kos->username; ?>
        </span>
        <?php break; // Untuk menghentikan loop setelah satu baris pertama 
          ?>
      <?php endforeach; ?>
    </h1>

  </div><!-- End Page Title -->
  <!-- ================================= TABLE ================================= -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <?php foreach ($koss as $kos): ?>
              <h5 class="card-title">Table Kos
                <?= $kos->username; ?>
              </h5>
              <?php break; // Untuk menghentikan loop setelah satu baris pertama 
                ?>
            <?php endforeach; ?>
            <a href="<?= base_url('admin/kos/') ?>" class="btn btn-danger btn-sm mb-3">Kembali</a>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Username</th>
                  <th scope="col">Nama Kosan</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Tanggal Buka</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($koss as $kos): ?>
                  <tr>
                    <td>
                      <?= $no++; ?>
                    </td>
                    <td>
                      <?= $kos->nama_lengkap; ?>
                    </td> <!-- Mengambil nama pengguna -->
                    <td>
                      <?= $kos->username; ?>
                    </td> <!-- Mengambil nama pengguna -->
                    <td>
                      <?= $kos->nama_kos; ?>
                    </td>
                    <td>
                      <?= $kos->kategori; ?>
                    </td>
                    <td>
                      <?= $kos->tanggal_buka; ?>
                    </td>
                    <td>
                      <a href="<?= base_url('admin/kos/detail/' . $kos->id) ?>" class="btn btn-primary"><i
                          class="bi bi-eye"></i></a>
                      <a href="<?= base_url('admin/kos/hapus_konfirmasi/' . $kos->id) ?>" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash"></i>
                      </a>
                    </td>
                  </tr>
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