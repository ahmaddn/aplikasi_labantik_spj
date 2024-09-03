
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                           
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Form Pesanan</h4>
                                </div>
                                <?php echo validation_errors(); ?>

                                  <?php echo form_open('Pesanan/addpesanan'); ?>
                                <form action="#" method="POST">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">No. Faktur</label>
                                        <input class="form-control" type="number" name="faktur" placeholder="Masukkan Nomor Faktur" required>
                                    </div>

                                     <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Kegiatan</label>
                                            <select class="form-control show-tick" name="idkegiatan">
                                                <option value="">Silahkan Pilih Kegiatan</option>
                                                <?php foreach ($kegiatan as $seen) : ?>
                                                    <option value="<?php echo $seen['kegiatanID'];?>"><?php echo $seen['namapekerjaan'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                     </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Penyedia</label>
                                            <select class="form-control show-tick" name="idpenyedia">
                                                <option value="">Silahkan Pilih Penyedia</option>
                                                <?php foreach ($penyedia as $seen) : ?>
                                                    <option value="<?php echo $seen['id_penyedia'];?>"><?php echo $seen['namaperusahaan'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                     </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Penerima</label>
                                            <select class="form-control show-tick" name="idpenerima">
                                                <option value="">Silahkan Pilih Penerima</option>
                                                <?php foreach ($penerima as $seen) : ?>
                                                    <option value="<?php echo $seen['penerimaID'];?>"><?php echo $seen['namapenerima'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                     </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Barang</label>
                                            <select class="form-control show-tick" name="idbarang">
                                                <option value="">Silahkan Pilih Barang</option>
                                                <?php foreach ($barang as $seen) : ?>
                                                    <option value="<?php echo $seen['id_barang'];?>"><?php echo $seen['namabarang'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                     </div>
                                    

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Alokasi Anggaran</label>
                                        <input class="form-control" type="number" name="alokasi" id="nip" placeholder="Masukkan NIP" required>
                                    </div>

                                   <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Uang Sejumlah</label>
                                        <input class="form-control" type="text" name="jumlahuang" id="tahunajaran" placeholder="Masukkan Tahun Ajaran" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tanggal Pesan</label>
                                        <input class="form-control" type="date" name="tglpesan" id="tahunajaran" placeholder="Masukkan Tahun Ajaran" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Tanggal Lunas</label>
                                        <input class="form-control" type="date" name="tgllunas" id="tahunajaran" placeholder="Masukkan Tahun Ajaran" required>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Submit </button>
                                        <a href="<?php echo base_url();?>data/datapesanan" class="btn btn-link">Kembali</a>
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
