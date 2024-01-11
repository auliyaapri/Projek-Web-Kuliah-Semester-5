<main id="main" class="main">

  <div class="pagetitle">
    <h1>Pesan</h1>    
  </div><!-- End Page Title -->
  <!-- ================================= TABLE ================================= -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Table Pesan</h5>

            <!-- Default Table -->
            <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Subjek Pesan</th>
            <th scope="col">Pesan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($pesans as $pesan) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pesan->nama; ?></td>
                <td><?= $pesan->email; ?></td>
                <td><?= $pesan->subjek; ?></td>
                <td><?= $pesan->isi_pesan; ?></td>
                <td>         
                <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $pesan->id; ?>" type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>          
                    
                </td>
            </tr>
              <!-- =============== Hapus MOdal ================== -->
              <div class="modal fade" id="exampleModal<?= $pesan->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembatalan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda yakin ingin menghapus pesan dari <b><?= $pesan->nama ?></b> ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('admin/pesan/hapus/' . $pesan->id); ?>" class="btn btn-danger">Ya, Hapus</a>
                    

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- =============== Hapus MOdal ================== -->
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