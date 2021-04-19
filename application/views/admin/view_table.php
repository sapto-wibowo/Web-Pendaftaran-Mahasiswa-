<!DOCTYPE html>
<html>
<head>
    <title>List Data Peserta</title>
    <?php $this->load->view('_matrials/head.php')?>
</head>
<body>
<?php $this->load->view('_matrials/navbar.php')?>
<div id="wrapper">
    <div id="content-wrapper">
        <div id="layoutSidenav">
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
            <div class="table table-bordered">
            <center><h3 class="animasi-teks">Tabel Data Mahasiswa</h3></center>
            <a class="btn btn-primary" href="<?php echo site_url('admin/adminku/tambah');?>">Tambah Data</a>
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>No.Reg</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Sex</th>
                            <th>Tempat, Tanggal lahir</th>
                            <th>Photo</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Telp.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswaku as $siswa): ?>
                        <tr>
                            <td>
                            <?php echo "MS".$siswa->no_daftar ?>
                            </td>
                            <td >
                                <?php echo $siswa->nama ?>
                            </td>
                            <td >
                                <?php echo $siswa->nim ?>
                            </td>
                            <td >
                                <?php echo $siswa->sex ?>
                            </td>
                            <td >
                                <?php echo $siswa->tempat ?> <?php echo ",".$siswa->tgl_lahir ?>
                            </td>
                            
                            <td>
                                <img src="<?php echo base_url('./upload_image/'.$siswa->foto) ?>" width="64" />
                            </td>
                            <td>
                                <?php echo $siswa->alamat ?>
                            </td>
                            <td >
                                <?php echo $siswa->email ?>
                            </td>
                            <td >
                                <?php echo $siswa->telp ?>
                            </td>
                            <td >
                                <a href="<?php echo site_url('admin/adminku/ubah/' . $siswa->id) ?>"
                                    class="btn btn-warning"> Edit</a>
                                <a onclick="deleteConfirm('<?php echo site_url('admin/adminku/delete/'.$siswa->id) ?>')"
                                    href="#!" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
            <footer>
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://wibowo.sapto@gmail.com"> Sapto Wibowo</a>
                </div>
            </footer>
    </div>
</div>
    <?php $this->load->view('admin/view_delete.php')?>
    <script>
        function deleteConfirm(url){
            $('#btn-hapus').attr('href', url);
            $('#hapusmodal').modal();
        }
    </script>
    <script src="<?php echo base_url('assets/js/jQuery.js')?>"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/scripts.js')?>"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>