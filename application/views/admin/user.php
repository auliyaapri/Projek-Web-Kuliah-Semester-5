<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data User</h1>
  </div><!-- End Page Title -->
  <!-- ================================= TABLE ================================= -->
  <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data User / Pengguna Table</h5>

                    <!-- Default Table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No KTP</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">No Telpon</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $user->nomor_ktp; ?></td>
                                        <td><?= $user->nama_lengkap; ?></td>
                                        <td><?= $user->jenis_kelamin; ?></td>
                                        <td><?= $user->no_telpon; ?></td>
                                        <td><?= $user->alamat_lengkap; ?></td>
                                        <td><?= $user->email; ?></td>
                                        <td><?= $user->username; ?></td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $user->id; ?>" type="button"
                                                class="btn btn-danger"><i class="bi bi-trash"></i> </button>
                                            <a href="<?= base_url('admin/user/edit/' . $user->id); ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?= $user->id; ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus User</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Anda yakin ingin menghapus user <b><?= $user->username ?></b> ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <a href="<?= base_url('admin/user/hapus/' . $user->id); ?>" class="btn btn-danger">Ya, Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- End Default Table Example -->
                </div>
            </div>
        </div>
    </div>
</section>


</main>