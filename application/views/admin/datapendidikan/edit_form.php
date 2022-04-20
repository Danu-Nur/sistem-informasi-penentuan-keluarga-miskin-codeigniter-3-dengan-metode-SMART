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

						<a href="<?php echo site_url('admin/data_pendidikan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/data_pendidikan/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $datapendidikan->ID_PENDIDIKAN?>" />

							<div class="form-group">
								<label for="tingkat pendidikan">Tingkat pendidikan*</label>
								<input class="form-control <?php echo form_error('tingkat pendidikan') ? 'is-invalid':'' ?>"
								 type="text" name="tingkat pendidikan" placeholder="Tingkat pendidikan" value="<?php echo $datapendidikan->TINGKAT_PENDIDIKAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tingkat pendidikan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tempat pendidikan">Tempat pendidikan*</label>
								<input class="form-control <?php echo form_error('tempat pendidikan') ? 'is-invalid':'' ?>"
								 type="text" name="tempat pendidikan" placeholder="Tempat pendidikan" value="<?php echo $datapendidikan->TEMPAT_PENDIDIKAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat pendidikan') ?>
								</div>
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