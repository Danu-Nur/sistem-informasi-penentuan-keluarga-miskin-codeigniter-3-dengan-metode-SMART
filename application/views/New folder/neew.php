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
						<a href="<?php echo site_url('admin/data_kriteria/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/data_kriteria/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="kode kriteria">Kode Kriteria*</label>
								<input class="form-control <?php echo form_error('kode kriteria') ? 'is-invalid':'' ?>"
								 type="text" name="kode kriteria" placeholder="Kode kriteria" />
								<div class="invalid-feedback">
									<?php echo form_error('kode kriteria') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama kriteria">Nama Kriteria*</label>
								<input class="form-control <?php echo form_error('nama kriteria') ? 'is-invalid':'' ?>"
								 type="text" name="nama kriteria" placeholder="Nama kriteria" />
								<div class="invalid-feedback">
									<?php echo form_error('nama kriteria') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="atribut">Atribut*</label>
								<input class="form-control <?php echo form_error('atribut') ? 'is-invalid':'' ?>"
								 type="text" name="atribut" placeholder="atribut" />
								<div class="invalid-feedback">
									<?php echo form_error('atribut') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="bobot kriteria">Bobot Kriteria*</label>
								<input class="form-control <?php echo form_error('bobot kriteria') ? 'is-invalid':'' ?>"
								 type="text" name="bobot kriteria" placeholder="Bobot kriteria" />
								<div class="invalid-feedback">
									<?php echo form_error('bobot kriteria') ?>
								</div>
							</div>

							<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/data_kriteria/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

				<form action="<?php echo site_url('admin/data_kriteria/add') ?>" method="post" enctype="multipart/form-data" >


				<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="JENIS_DINDING">Luas Lantaii</label>
                </div>
              <select class="custom-select <?php echo form_error('JENIS_DINDING') ? 'is-invalid':'' ?>" name="JENIS_DINDING"> 
                  <option selected>Pilih...</option>
                  <option value="4">Luas lantai <= 6m2</option>
                  <option value="3">Luas lantai 6m2 – 8m2</option>
                  <option value="2">Luas lantai 8m2 – KONSUMSI_DAGING4m2</option>
                  <option value="1">Luas lantai  >KONSUMSI_DAGING4m2</option>
                </select>
              </div>


				<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="JENIS_LANTAI">Jenis Lantai</label>
                </div>
              <select class="custom-select <?php echo form_error('JENIS_LANTAI') ? 'is-invalid':'' ?>" name="JENIS_LANTAI"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tanah</option>
                  <option value="3">Kayu / Bambu</option>
                  <option value="2">Plester Semen</option>
                  <option value="1">Keramik</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="JENIS_DINDING">Jenis Dinding</label>
                </div>
              <select class="custom-select <?php echo form_error('JENIS_DINDING') ? 'is-invalid':'' ?>" name="JENIS_DINDING"> 
                  <option selected>Pilih...</option>
                  <option value="4">Bambu/ kayu</option>
                  <option value="3">Triplek</option>
                  <option value="2">Tembok Non Plester</option>
                  <option value="1">Tembok Plester</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="TIDAKADA_KM">Kamar Mandi</label>
                </div>
              <select class="custom-select <?php echo form_error('TIDAKADA_KM') ? 'is-invalid':'' ?>" name="TIDAKADA_KM"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tidak Memiliki Kamar Mandi</option>
                  <option value="3">Bersama Keluarga lain</option>
                  <option value="2">Kamar Mandi Tembok Non Plester</option>
                  <option value="1">Kamar Mandi Tembok Plester</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="LAMPU">Lampu</label>
                </div>
              <select class="custom-select <?php echo form_error('LAMPU') ? 'is-invalid':'' ?>" name="LAMPU"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tidak Ada</option>
                  <option value="3">Lilin</option>
                  <option value="2">Lampu Minyak</option>
                  <option value="1">Lampu Listrik</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="SUMBER_AIRMINUM">Air Minum</label>
                </div>
              <select class="custom-select <?php echo form_error('AIR_MINUM') ? 'is-invalid':'' ?>" name="AIR_MINUM"> 
                  <option selected>Pilih...</option>
                  <option value="4">Air Kali/Sungai</option>
                  <option value="3">Air Sumur</option>
                  <option value="2">Air Hujan</option>
                  <option value="1">Air PDAM</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="BAHAN_BAKAR">Bahan Bakar</label>
                </div>
              <select class="custom-select <?php echo form_error('BAHAN_BAKAR') ? 'is-invalid':'' ?>" name="BAHAN_BAKAR"> 
                  <option selected>Pilih...</option>
                  <option value="4">Kayu Bakar</option>
                  <option value="3">Arang</option>
                  <option value="2">Kompor Minyak Tanah</option>
                  <option value="1">Gas Elpiji</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="KONSUMSI_DAGING">Konsumsi_Daging</label>
                </div>
              <select class="custom-select <?php echo form_error('KONSUMSI_DAGING') ? 'is-invalid':'' ?>" name="KONSUMSI_DAGING"> 
                  <option selected>Pilih...</option>
                  <option value="4">1x Seminggu</option>
                  <option value="3">2x Seminggu</option>
                  <option value="2">3x Seminggu</option>
                  <option value="1">Lebih Dari 3x Seminggu</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="MEMBELI_PAKAIAN">Pakaian</label>
                </div>
              <select class="custom-select <?php echo form_error('MEMBELI_PAKAIAN') ? 'is-invalid':'' ?>" name="MEMBELI_PAKAIAN"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tidak Sama Sekali</option>
                  <option value="3">1 Stel / tahun</option>
                  <option value="2">2 Stel / tahun</option>
                  <option value="1">Lebih Dari 2 Stel / tahun</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="TIDAKBISA_BAYAROBAT">Pengobatan</label>
                </div>
              <select class="custom-select <?php echo form_error('TIDAKBISA_BAYAROBAT') ? 'is-invalid':'' ?>" name="TIDAKBISA_BAYAROBAT"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tidak Sama Sekali</option>
                  <option value="3">Puskesmas</option>
                  <option value="2">Alternatif</option>
                  <option value="1">Rumah Sakit</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="PENGHASILAN">Penghasilan</label>
                </div>
              <select class="custom-select <?php echo form_error('PENGHASILAN') ? 'is-invalid':'' ?>" name="PENGHASILAN"> 
                  <option selected>Pilih...</option>
                  <option value="4"> < 600.000</option>
                  <option value="3">600.000 – 1.000.000</option>
                  <option value="2">1.000.000 – 2.000.000</option>
                  <option value="1"> > 2.000.000</option>
                </select>
              </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="PENDIDIKAN_TERTINGGI">Pendidikan</label>
                </div>
              <select class="custom-select <?php echo form_error('PENDIDIKAN_TERTINGGI') ? 'is-invalid':'' ?>" name="PENDIDIKAN_TERTINGGI"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tidak Sekolah</option>
                  <option value="3">SD</option>
                  <option value="2">SMP</option>
                  <option value="1">SMA</option>
                </select>
              </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="TIDAKADA_TABUNGAN">Tabungan</label>
                </div>
              <select class="custom-select <?php echo form_error('TIDAKADA_TABUNGAN') ? 'is-invalid':'' ?>" name="TIDAKADA_TABUNGAN"> 
                  <option selected>Pilih...</option>
                  <option value="4">Tidak Mempunyai Tabungan</option>
                  <option value="3">Tabungan Hanya Untuk Kehidupan Sehari</option>
                  <option value="2">Tabungan Hanya Untuk Kehidupan Seminggu</option>
                  <option value="1">Mempunyai Tabungan</option>
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