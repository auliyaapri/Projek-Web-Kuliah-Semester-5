<script>
    // =============== LOGIN & REGISTER ===============

    <?php if ($this->session->flashdata('belum_login_user')) { ?>
        Swal.fire({
            title: 'Error!',
            text: 'Anda Belum Login',
            icon: 'error',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_daftar')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Berhasil melakukan registrasi',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    // =============== PENGELOLA KOS USER===============

    <?php if ($this->session->flashdata('success_buka_kos')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Kos anda berhasil ditambah',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
// ==================
<?php if ($this->session->flashdata('error_message')) { ?>
    Swal.fire({
        title: 'Success!',
        text: 'Kos anda berhasil ditambah',
        icon: 'success',
        confirmButtonText: 'Oke'
    })
    <?php } ?>
<?php if ($this->session->flashdata('success_message')) { ?>
    Swal.fire({
        title: 'Success!',
        text: 'Kos anda berhasil BACOT',
        icon: 'success',
        confirmButtonText: 'Oke'
    })
    <?php } ?>

    
// ==================
  
    <?php if ($this->session->flashdata('success_hapus_batal')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Pemesanan berhasil dibatalkan',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    <?php if ($this->session->flashdata('success_konfirmasi')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Terima kasih atas konfirmasinya. Mohon tunggu informasinya, pengelola kos akan segera memprosesnya.',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_edit_kos')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Edit Kos Berhasil.',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_menyewa_kos')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Anda telah berhasil menyelesaikan proses penyewaan kos. Langkah selanjutnya adalah segera melakukan pembayaran.',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    
    <?php if ($this->session->flashdata('success_konfirmasi_sewa_kos_pemilik')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Status telah berhasil diperbarui, dan pengguna yang menyewa kosan saat ini dalam keadaan aktif.',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    // =============== CONTACT ===============
    <?php if ($this->session->flashdata('success_contact')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Pesan Anda telah berhasil dikirim. Anda akan menerima balasan melalui email yang telah Anda masukkan.',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('error_contact')) { ?>
        Swal.fire({
            title: 'Error!',
            text: 'Pesan Anda gagal dikirim. Silakan periksa kembali',
            icon: 'error',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    
    // ================================
    <?php if ($this->session->flashdata('bukan_admin')) { ?>
        Swal.fire({
            title: 'Error!',
            text: 'Anda Bukan Admin',
            icon: 'error',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
</script>