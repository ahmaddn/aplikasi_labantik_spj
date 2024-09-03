
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                           
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Form Kegiatan</h4>
                                </div>
                                
                                <form action="<?php echo base_url()?>kegiatan/ubahkegiatan" method="POST">
                                    
                                     <input type="hidden" name="kegiatanID" value="<?= $kegiatan['kegiatanID'] ?>">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama Pekerjaan</label>
                                        <input class="form-control" type="text" name="nama" id="name" value="<?= $kegiatan['namapekerjaan'] ?>" placeholder="Masukkan Nama" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tanggal Pesanan</label>
                                        <input class="form-control" type="date" value="<?= $kegiatan['tanggalpesanan'] ?>" name="tglpesanan" id="nip" required="" placeholder="Masukkan NIP" >
                                    </div>

                                   <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tanggal Diterima</label>
                                        <input class="form-control" type="date" name="tglditerima" value="<?= $kegiatan['tanggalditerima'] ?>" id="tahunajaran" required="" placeholder="Masukkan Tahun Ajaran">
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Waktu Penyelesaian</label>
                                        <input class="form-control" type="text" name="waktu" value="<?= $kegiatan['waktupenyelesaian'] ?>" id="tahunajaran" required="" placeholder="Masukkan Tahun Ajaran">
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Keterangan Terima</label>
                                        <input class="form-control" type="text" name="keterangan" value="<?= $kegiatan['keteranganterima'] ?>" id="tahunajaran" required="" placeholder="Masukkan Tahun Ajaran">
                                    </div>
                                   
                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Submit </button>
                                      <a href="<?php echo base_url();?>data/datakegiatan" class="btn btn-link">Kembali</a>
                               

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
