
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                           
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Form Barang</h4>
                                </div>
                                <?php echo validation_errors(); ?>

                                  <?php echo form_open('Barang/addbarang'); ?>
                                <form action="#" method="POST">

                                   

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama Barang</label>
                                        <input class="form-control" type="text" name="nama" id="name" placeholder="Masukkan Nama Barang" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Jumlah Barang</label>
                                        <input class="form-control" type="number" name="jumlahbarang" id="nip"  placeholder="Masukkan Jumlah Barang" required>
                                    </div>

                                   <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Harga Barang</label>
                                        <input class="form-control" type="number" name="hargabarang" id="tahunajaran"  placeholder="Masukkan Harga Barang" required>
                                    </div>



                                    <div class="mb-3 mb-0 text-center">
                                         <button class="btn btn-success" type="submit"> Submit </button>
                                        <button class="btn btn-danger" type="reset"> Reset </button>
                                        <a href="<?php echo base_url();?>data/databarang" class="btn btn-link">Kembali</a>
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
