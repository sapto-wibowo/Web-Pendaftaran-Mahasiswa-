<?php $this->load->view('_matrials/head.php')?>
<?php $this->load->view('_matrials/navbar.php')?>

<div id="wrapper">
    <div id="content-wrapper">
        <div id="layoutSidenav">
        <!-- sidebar -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <ul class="sidebar navbar-nav">
                            <li class="nav-item">
                                <div class="sidebar-heading"><h3>Menu</h3> </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('admin/adminku/')?>">
                                    <span>HOME</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('admin/adminku/tambah');?>">
                                    <span>New Data</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end Sidebar -->
        <div class="card-body">
            <form action = "<?php echo site_url('admin/adminku/tambah')?>" method= "post" enctype="multipart/form-data">
            <center><h2><b>Menambahkan Data Mahasiswa</b></h2></center><br>
                <div class="form-group">
                    <label class="control-label col-md-4" for="no_daftar"> Nomor Pendaftaran</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <input type="number" name="no_daftar" min="0" max="1000" require="true"
                                class="form-control <?php echo form_error('no_daftar') ? 'is-invalid':'' ?>" >
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_daftar') ?>
                                </div>         
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="nama"> Nama Mahasiswa</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <input type="text" name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" placeholder="Masukkan nama" >
                            <div class="invalid-feedback">
                                <?php echo form_error('nama') ?>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="nim"> NIM</label>
                    <div class="col-md-6 inputGroupCntainer">
                        <input type="text" name="nim" class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>" placeholder="" >
                        <div class="invalid-feedback">
                            <?php echo form_error('nim') ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="sex"> Jenis Kelamin</label>
                    <div class="col inputGroupCntainer">
                        <select type="text" name="sex" class="form-control col-md-2 <?php echo form_error('sex') ? 'is-invalid':'' ?>" >
                            <option value="">-- pilih --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('sex') ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="tempat">Tempat Lahir</label>
                    <div class="col inputGroupCntainer">
                        <input type="text" name="tempat" class="form-control col-md-6 <?php echo form_error('tempat') ? 'is-invalid':'' ?>" placeholder="Masukkan tempat anda lahir">
                        <div class="invalid-feedback">
                            <?php echo form_error('tempat') ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="tgl_lahir">Tanggal lahir</label>
                    <div class="col inputGroupCntainer">
                        <input type="date" name="tgl_lahir" id="tgl" class="form-control col-md-4 <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" required="true">
                        <div class="invalid-feedback">
                            <?php echo form_error('tgl_lahir') ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="foto">Foto diri</label>
                    <div class="col inputGroupCntainer">
                        <input type="file" name="foto" 
                        class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" >
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                    </div>    
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-4" for="alamat"> Alamat</label>
                    <div class="col inputGroupCntainer">
                        <input type="text" name="alamat" class="form-control col-md-6" placeholder="Masukkan alamat anda">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-4" for="email">email</label>
                    <div class="col inputGroupCntainer">
                        <input type="text" name="email" class="form-control col-md-4 <?php echo form_error('email') ? 'is-invalid':'' ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('email') ?>
                        </div>
                    </div>
                </div>
                        
                <div class="form-group">
                    <label class="control-label col-lg-4" for="telp"> Nomor Telepon</label>
                    <div class="col inputGroupCntainer">
                        <input type="text" name="telp" class="form-control col-md-4 <?php echo form_error('telp') ? 'is-invalid':'' ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('telp') ?>
                        </div>
                    </div>
                </div>
                <div class="col inputGroupCntainer">
                    <!-- input data -->
                    <a href="<?php echo site_url('admin/adminku/')?>" class="btn btn-secondary">CLOSE</a>
                    <input type="submit" name="btn" class=" btn btn-primary" value="SAVE">
                </div>
            </form>
                <script src="<?php echo base_url('assets/js/jQuery.js')?>"></script>
                    <script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/scripts.js')?>"></script>
        </div>
        </div>
                    <footer class="page-footer font-small teal pt-4">
                        <div class="footer-copyright text-center py-3">© 2020 Copyright:
                            <a href="#"> Sapto Wibowo</a>
                        </div>
                    </footer>
    </div>
</div>