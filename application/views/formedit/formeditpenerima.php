
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                           
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Form Penerima</h4>
                                </div>
                                
                                <form action="<?php echo base_url()?>penerima/ubahDataPenerima" method="POST">
                                    
                                     <input type="hidden" name="penerimaID" value="<?= $penerima['penerimaID'] ?>">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama Penerima</label>
                                        <input class="form-control" type="text" name="nama" id="name" value="<?= $penerima['namapenerima'] ?>" placeholder="Masukkan Nama" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">NIP</label>
                                        <input class="form-control" type="number" value="<?= $penerima['nip'] ?>" name="nip" id="nip" required="" placeholder="Masukkan NIP" >
                                    </div>

                                   <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tahun Ajaran</label>
                                        <input class="form-control" type="number" name="thnajaran" value="<?= $penerima['tahunajaran'] ?>" id="tahunajaran" required="" placeholder="Masukkan Tahun Ajaran" max="2100" min="1900">
                                    </div>
                                   
                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Submit </button>
                                      <a href="<?php echo base_url();?>data/datapenerima" class="btn btn-link">Kembali</a>
                               

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
