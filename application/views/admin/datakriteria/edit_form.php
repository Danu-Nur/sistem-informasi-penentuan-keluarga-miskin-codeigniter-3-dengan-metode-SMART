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

						<a href="<?php echo site_url('admin/data_kriteria/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/data_kriteria/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $datakriteria->ID_KRITERIA?>" />

							<div class="form-group">
								<label for="luas lantai">Luas Lantai*</label>
								<input class="form-control <?php echo form_error('luas lantai') ? 'is-invalid':'' ?>"
								 type="text" name="luas lantai" placeholder="Luas lantai" value="<?php echo $datakriteria->LUAS_LANTAI?>" />
								<div class="invalid-feedback">
									<?php echo form_error('luas lantai') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis lantai">Jenis Lantai*</label>
								<input class="form-control <?php echo form_error('jenis lantai') ? 'is-invalid':'' ?>"
								 type="text" name="jenis lantai" placeholder="Jenis lantai" value="<?php echo $datakriteria->JENIS_LANTAI?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis lantai') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kamar mandi">Kamar Mandi*</label>
								<input class="form-control <?php echo form_error('kamar mandi') ? 'is-invalid':'' ?>"
								 type="text" name="kamar mandi" placeholder="Kamar mandi" value="<?php echo $datakriteria->KAMAR_MANDI?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kamar mandi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="lampu">Lampu*</label>
								<input class="form-control <?php echo form_error('lampu') ? 'is-invalid':'' ?>"
								 type="text" name="lampu" placeholder="Lampu" value="<?php echo $datakriteria->LAMPU?>" />
								<div class="invalid-feedback">
									<?php echo form_error('lampu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="air minum">Air Minum*</label>
								<input class="form-control <?php echo form_error('air minum') ? 'is-invalid':'' ?>"
								 type="text" name="air minum" placeholder="Air minum" value="<?php echo $datakriteria->AIR_MINUM?>" />
								<div class="invalid-feedback">
									<?php echo form_error('air minum') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="bahan bakar">Bahan Bakar*</label>
								<input class="form-control <?php echo form_error('bahan bakar') ? 'is-invalid':'' ?>"
								 type="text" name="bahan bakar" placeholder="Bahan bakar" value="<?php echo $datakriteria->BAHAN_BAKAR?>" />
								<div class="invalid-feedback">
									<?php echo form_error('bahan bakar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="konsumsi daging">Konsumsi Daging*</label>
								<input class="form-control <?php echo form_error('konsumsi daging') ? 'is-invalid':'' ?>"
								 type="text" name="konsumsi daging" placeholder="Konsumsi daging" value="<?php echo $datakriteria->KONSUMSI_DAGING?>" />
								<div class="invalid-feedback">
									<?php echo form_error('konsumsi daging') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pakaian">Pakaian*</label>
								<input class="form-control <?php echo form_error('pakaian') ? 'is-invalid':'' ?>"
								 type="text" name="pakaian" placeholder="Pakaian" value="<?php echo $datakriteria->PAKAIAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pakaian') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="makanan">Makanan*</label>
								<input class="form-control <?php echo form_error('makanan') ? 'is-invalid':'' ?>"
								 type="text" name="makanan" placeholder="Makanan" value="<?php echo $datakriteria->MAKANAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('makanan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pengobatan">Pengobatan*</label>
								<input class="form-control <?php echo form_error('pengobatan') ? 'is-invalid':'' ?>"
								 type="text" name="pengobatan" placeholder="Pengobatan" value="<?php echo $datakriteria->PENGOBATAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pengobatan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="penghasilan">Penghasilan*</label>
								<input class="form-control <?php echo form_error('penghasilan') ? 'is-invalid':'' ?>"
								 type="text" name="penghasilan" placeholder="Penghasilan" value="<?php echo $datakriteria->PENGHASILAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('penghasilan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pendidikan">Pendidikan*</label>
								<input class="form-control <?php echo form_error('pendidikan') ? 'is-invalid':'' ?>"
								 type="text" name="pendidikan" placeholder="Pendidikan" value="<?php echo $datakriteria->PENDIDIKAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pendidikan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tabungan">Tabungan*</label>
								<input class="form-control <?php echo form_error('tabungan') ? 'is-invalid':'' ?>"
								 type="text" name="tabungan" placeholder="Tabungan" value="<?php echo $datakriteria->TABUNGAN?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tabungan') ?>
								</div>
							</div>

							<div class="input-group mb-3">
              				  <div class="input-group-prepend">
                			    <label class="input-group-text" for="ID_PENDUDUK">Penduduk</label>
            				  </div>
           					  <select class="custom-select <?php echo form_error('ID_PENDUDUK') ? 'is-invalid':'' ?>" name="ID_PENDUDUK"> 
         				      <option selected>Pilih...</option>
            			      <?php foreach ($pen as $dp): ?>
         			         <option value="<?php echo $dp->ID_PENDUDUK ?>" <?php if ($datakriteria->ID_PENDUDUK == $dp->ID_PENDUDUK){echo "selected";} ?> ><?php  echo $dp->NAMA_PENDUDUK ?></option>
         			     <?php endforeach; ?>
         			      </select>
          				    </div>

          				    <div class="input-group mb-3">
              				  <div class="input-group-prepend">
                			    <label class="input-group-text" for="ID_DETAIL">Detail Kriteria</label>
            				  </div>
           					  <select class="custom-select <?php echo form_error('ID_DETAIL') ? 'is-invalid':'' ?>" name="ID_DETAIL"> 
         				      <option selected>Pilih...</option>
            			      <?php foreach ($dek as $dk): ?>
         			         <option value="<?php echo $dk->ID_DETAIL ?>" <?php if ($datakriteria->ID_PENDUDUK == $dk->ID_DETAIL){echo "selected";} ?> ><?php  echo $dk->NAMA_DK ?></option>
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