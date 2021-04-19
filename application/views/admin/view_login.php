<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('_matrials/head.php')?>
    <title>Login</title>
</head>
<body style="
    background-image: linear-gradient(to top, #f3e7e9 10%, #e3eeff 99%, #e3eeff 50%);">
<div style="margin: 250px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;">
<div class="row">
    <div class="col">
        <div class="card" style=" background-image: linear-gradient(to bottom, #5ee7df 0%, #b490ca 100%);">
            <div class="card-body">
    <h1 class="text-center">Form Login</h1>
    <form action="<?php echo base_url('index.php/admin/Login/aksi_login');?>" method="post">
        <div class="md-form">
            <label for="username">Username</label>
                <input class="form-control" type="text" name="username">
        </div>
        <div class="md-form">
            <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
        </div>
        <div class="text-center">
            <button class="btn btn-default waves-effect waves-light"><input class="btn btn-success" type="submit" value="LOGIN"></button>
        </div>
    </form>

            </div>
        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url('assets/js/jQuery.js')?>"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/scripts.js')?>"></script>

</body>
</html>