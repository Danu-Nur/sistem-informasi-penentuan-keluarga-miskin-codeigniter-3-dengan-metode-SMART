
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<title><?php echo $judul; ?></title>

<!-- Bootstrap core CSS-->
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

 </head>
<body class="hold-transition login-page">
<div class="bg-utama"> </div>
<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
		</div>
		<?php endif; ?>
<div class="login-box ">
  <!-- /.login-logo -->
    
    <div class="card-body">
		<?php echo $this->session->flashdata('pesan'); ?>
      <p class="login-box-msg h3">Sistem Penunjang Keputusan</p>

      <form action="<?= base_url('Welcome') ?>" method="post">
	  <?php echo form_error('NAMA_USER','<div class="text-danger small ml-2">','</div>'); ?>
        <div class="input-group mb-3">
          <input type="text" id="inputEmail" class="form-control" placeholder="Username" autofocus="autofocus" name="NAMA_USER">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
				
		<?php echo form_error('PASSW','<div class="text-danger small ml-2">','</div>'); ?>
        <div class="input-group mb-3">
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="PASSW">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
				

        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-dark btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
    <!-- /.card-body -->
  
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
</body>
</html>
