

    

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <div class="row">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Data Barang</h4>
                                        
                                        <div class="col-sm-16">
                                                <div class="text-sm-end">
                                                    <a href="<?php echo base_url();?>form/formbarang" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i>Tambah Data</a>
                                                </div>
                                            </div><!-- end col-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="striped-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Barang</th>
                                                                <th>Jumlah Barang</th>
                                                                <th>Harga Barang</th>
                                                                <th>Jumlah Harga</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                            <?php
                                                        foreach($barang as $u){
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $u['id_barang'] ?></td>
                                                                <td><?php echo $u['namabarang'] ?></td>
                                                                <td><?php echo $u['jumlahbarang'] ?></td>
                                                                <td><?php echo $u['hargabarang'] ?></td>
                                                                <td><?php echo $u['jumlahharga'] ?></td>

                                                            
                                                                <td>
                                                                    <a href="<?php echo base_url();?>barang/editbarang/<?= $u['id_barang']?>" class="btn btn-success"><i class="mdi mdi-pencil"></i></a>
                                                                    <a href="<?php echo base_url();?>barang/hapusbarang/<?= $u['id_barang']?>" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>              
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