<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

             	<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/data_perhitungan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/data_perhitungan/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $dataperhitungan->ID_HITUNG?>" />

							<div class="form-group">
								<label for="hasil hitung">Hasil Hitung*</label>
								<input class="form-control <?php echo form_error('hasil hitung') ? 'is-invalid':'' ?>"
								 type="text" name="hasil hitung" placeholder="Hasil hitung" value="<?php echo $dataperhitungan->HASIL_HITUNG ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('hasil hitung') ?>
								</div>
							</div>

							<div class="input-group mb-3">
              				  <div class="input-group-prepend">
                			    <label class="input-group-text" for="ID_PENDUDUK">Penduduk</label>
            				  </div>
           					  <select class="custom-select <?php echo form_error('ID_PENDUDUK') ? 'is-invalid':'' ?>" name="ID_PENDUDUK"> 
         				      <option selected>Pilih...</option>
            			      <?php foreach ($pend as $dp): ?>
         			         <option value="<?php echo $dp->ID_PENDUDUK ?>" <?php if ($dataperhitungan->ID_PENDUDUK == $dp->ID_PENDUDUK){echo "selected";} ?> ><?php  echo $dp->NAMA_PENDUDUK ?></option>
         			     <?php endforeach; ?>
         			      </select>
          				    </div>

          				    <div class="input-group mb-3">
              				  <div class="input-group-prepend">
                			    <label class="input-group-text" for="ID_KRITERIA">Kriteria</label>
            				  </div>
           					  <select class="custom-select <?php echo form_error('ID_KRITERIA') ? 'is-invalid':'' ?>" name="ID_KRITERIA"> 
         				      <option selected>Pilih...</option>
            			      <?php foreach ($kri as $dk): ?>
         			         <option value="<?php echo $dk->ID_KRITERIA ?>" <?php if ($dataperhitungan->ID_KRITERIA == $dk->ID_KRITERIA){echo "selected";} ?> ><?php  echo $dk->BOBOT_KRITERIA ?></option>
         			     <?php endforeach; ?>
         			      </select>
          				    </div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>


</body>

</html>