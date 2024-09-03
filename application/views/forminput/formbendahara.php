
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">


                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Form Bendahara</h4>
                                </div>
                                <?php echo validation_errors(); ?>

                                <?php echo form_open('bendahara/addbendahara');?>
                                <form action="#">

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama Bendahara</label>
                                        <input class="form-control" type="text" name="nama" id="username" placeholder="Enter your name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">NIP</label>
                                        <input class="form-control" type="number" name="nip" id="emailaddress"  placeholder="Enter your NIP" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cm-number" class="form-label">Tahun Ajaran</label>
                                        <input class="form-control" type="number" name="thnajaran" id="emailaddress"  placeholder="Enter your Tahun Ajaran" required>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                         <button class="btn btn-success" type="submit"> Submit </button>
                                        <button class="btn btn-danger" type="reset"> Reset </button>
                                        <a href="<?php echo base_url();?>data/databendahara" class="btn btn-link">Kembali</a>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                     