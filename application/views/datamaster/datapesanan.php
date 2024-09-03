

    

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <div class="row">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Data Pesanan</h4>
                                        
                                        <div class="col-sm-16">
                                                <div class="text-sm-end">
                                                    <a href="<?php echo base_url();?>form/formpesanan" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i>Tambah Data</a>
                                                </div>
                                            </div><!-- end col-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="striped-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>ID Pesanan</th>
                                                                <th>No. Faktur</th>
                                                                <th>Nama Kegiatan</th>
                                                                <th>Nama Penyedia</th>
                                                                <th>Nama Penerima</th>
                                                                <th>Nama Barang</th>
                                                                <th>Alokasi Anggaran</th>
                                                                <th>Jumlah Uang</th>
                                                                <th>Tanggal Pesan</th>
                                                                <th>Tanggal Lunas</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                            <?php 

                                                            $no = 1;

                                                            foreach($pesanan as $row){ 
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $row[''] ?></td>
                                                                <td><?php echo $row[''] ?></td>
                                                                <td><?php echo $row[''] ?></td>
                                                                <td><?php echo $row[''] ?></td>
                                                                <td><?php echo $row[''] ?></td>
                                                                <td><?php echo $row[''] ?></td>
                                                                <td><?php echo $row['alokasianggaran'] ?></td>
                                                                <td><?php echo $row['jumlahuang'] ?></td>
                                                                <td><?php echo $row['tgl_pesan'] ?></td>
                                                                <td><?php echo $row['tgl_lunas'] ?></td>
                                                                <td>
                                                                     <a href="<?php echo base_url();?>pesanan/editpesanan/<?= $row['pesananID']?>" class="btn btn-success"><i class="mdi mdi-pencil"></i></a>
                                                                     <a href="<?php echo base_url();?>pesanan/hapuspesanan/<?= $row['pesananID']?>" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                                      <a href="<?php echo base_url();?>pesanan/pdf/" class="btn btn-warning"><i class="mdi mdi-file"></i></a>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </thead>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                    
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                            <!-- Right Sidebar -->
        



 
</body>
</html>