<script>
    <?php if ($this->session->flashdata('success_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login Berhasil Admin',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
 
    <?php if ($this->session->flashdata('success_hapus_user')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'User Berhasil Di hapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_ubah_user')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'User Berhasil Di Ubah',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    <?php if ($this->session->flashdata('success_hapus_pesan')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Pesan Berhasil Di Hapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
   
   
    <?php if ($this->session->flashdata('success_hapus_kos')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Data kepemilikan kos pengguna telah berhasil dihapus oleh admin',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
 
</script>