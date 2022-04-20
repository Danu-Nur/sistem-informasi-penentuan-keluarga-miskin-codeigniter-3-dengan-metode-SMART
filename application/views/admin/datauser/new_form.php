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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/data_user/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/data_user/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama user">Nama user*</label>
								<input class="form-control <?php echo form_error('nama user') ? 'is-invalid':'' ?>"
								 type="text" name="nama user" placeholder="Nama user" />
								<div class="invalid-feedback">
									<?php echo form_error('nama user') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="passw">Passw*</label>
								<input class="form-control <?php echo form_error('passw') ? 'is-invalid':'' ?>"
								 type="text" name="passw" placeholder="Passw" />
								<div class="invalid-feedback">
									<?php echo form_error('passw') ?>
								</div>
							</div>

							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<label class="input-group-text" for="status_user">status user*</label>
							</div>
							<select class="custom-select <?php echo form_error('status_user') ? 'is-invalid':'' ?>" name="status_user"> 
							<option selected>Pilih...</option>
							<option value="ADMIN">ADMIN</option>
							<option value="PEMDES">PEMERINTAH DESA</option>
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