<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a href="<?= base_url('admin/dashboard') ?>"
        class="nav-link <?= ($this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '') ? '' : 'collapsed' ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= base_url('admin/user') ?>"
        class="nav-link <?= ($this->uri->segment(2) == 'user' || $this->uri->segment(2) == '') ? '' : 'collapsed' ?>">
        <i class="bi bi-person"></i>
        <span>User</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="<?= base_url('admin/kos') ?>"
        class="nav-link <?= ($this->uri->segment(2) == 'kos' || $this->uri->segment(2) == '') ? '' : 'collapsed' ?>">
        <i class="bi bi-house-gear-fill"></i>
        <span>Data Kos & User Pemilik Kos</span>
      </a>
    </li>


    <li class="nav-item">
      <a href="<?= base_url('admin/pesan') ?>"
        class="nav-link <?= ($this->uri->segment(2) == 'pesan' || $this->uri->segment(2) == '') ? '' : 'collapsed' ?>">

        <i class="bi bi-envelope"></i>
        <span>Pesan Masuk</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
    <a class="nav-link collapsed" href="#" onclick="confirmLogout()">

        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
    </a>
</li><!-- End Login Page Nav -->

<script>
    function confirmLogout() {
      var isConfirmed = confirm("Kamu yakin ingin logout?");

        if (isConfirmed) {
            window.location.href = "<?= base_url('auth/logout') ?>";
        } else {
            // Do nothing or handle accordingly if user cancels
        }
    }
</script>



  </ul>

</aside><!-- End Sidebar-->