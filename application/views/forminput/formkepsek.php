

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                           
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Form Kepala Sekolah</h4>
                                </div>
                                <?php echo validation_errors(); ?>

                                <?php echo form_open('kepsek/addkepsek');?>
                                <form action="#"  method="POST">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama</label>
                                        <input class="form-control" type="text" name="nama" id="name" placeholder="Masukkan Nama" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">NIP</label>
                                        <input class="form-control" type="number" name="nip" id="nip" placeholder="Masukkan NIP" required>
                                    </div>

                                   <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tahun Ajaran</label>
                                        <input class="form-control" type="number" name="tahunajaran" id="tahunajaran" placeholder="Masukkan Tahun Ajaran" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama Sekolah</label>
                                        <input class="form-control" type="text" name="namasekolah" id="namasekolah" placeholder="Masukkan Nama Sekolah" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Alamat Sekolah</label>
                                        <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Sekolah" required>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-success" type="submit"> Submit </button>
                                        <button class="btn btn-danger" type="reset"> Reset </button>
                                        <a href="<?php echo base_url();?>data/datakepsek" class="btn btn-link">Kembali</a>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <ead>
      
    </body>
</html>
