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


				<form action="<?php echo site_url('admin/Data_perhitungan/add') ?>" method="post" enctype="multipart/form-data" >

				<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="id_penduduk">Penduduk</label>
                </div>
              <select class="custom-select <?php echo form_error('id_penduduk') ? 'is-invalid':'' ?>" name="id_penduduk"> 
                  <option selected>Pilih...</option>
				  <?php foreach ($pen as $s): ?>
                  <option value="<?php echo $s->ID_PENDUDUK?>"><?php echo $s->NAMA_PENDUDUK ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

				<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="luas_lantai">Luas Lantai</label>
                </div>
              <select class="custom-select <?php echo form_error('luas_lantai') ? 'is-invalid':'' ?>" name="luas_lantai"> 
                  <option selected>Pilih...</option>
                  <option value="1">Luas lantai <= 6m2</option>
                  <option value="2">Luas lantai 6m2 – 8m2</option>
                  <option value="3">Luas lantai 8m2 – 14m2</option>
                  <option value="4">Luas lantai  > 14m2</option>
                </select>
              </div>


				<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="jenis_lantai">Jenis Lantai</label>
                </div>
              <select class="custom-select <?php echo form_error('jenis_lantai') ? 'is-invalid':'' ?>" name="jenis_lantai"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tanah</option>
                  <option value="2">Kayu / Bambu</option>
                  <option value="3">Plester Semen</option>
                  <option value="4">Keramik</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="jenis_dinding">Jenis Dinding</label>
                </div>
              <select class="custom-select <?php echo form_error('jenis_dinding') ? 'is-invalid':'' ?>" name="jenis_dinding"> 
                  <option selected>Pilih...</option>
                  <option value="1">Bambu/ kayu</option>
                  <option value="2">Triplek</option>
                  <option value="3">Tembok Non Plester</option>
                  <option value="4">Tembok Plester</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="kamar_mandi">Kamar Mandi</label>
                </div>
              <select class="custom-select <?php echo form_error('kamar_mandi') ? 'is-invalid':'' ?>" name="kamar_mandi"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tidak Memiliki Kamar Mandi</option>
                  <option value="2">Bersama Keluarga lain</option>
                  <option value="3">Kamar Mandi Tembok Non Plester</option>
                  <option value="4">Kamar Mandi Tembok Plester</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="lampu">lampu</label>
                </div>
              <select class="custom-select <?php echo form_error('lampu') ? 'is-invalid':'' ?>" name="lampu"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tidak Ada</option>
                  <option value="2">Lilin</option>
                  <option value="3">lampu Minyak</option>
                  <option value="4">lampu Listrik</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="air_minum">Air Minum</label>
                </div>
              <select class="custom-select <?php echo form_error('air_minum') ? 'is-invalid':'' ?>" name="air_minum"> 
                  <option selected>Pilih...</option>
                  <option value="1">Air Kali/Sungai</option>
                  <option value="2">Air Sumur</option>
                  <option value="3">Air Hujan</option>
                  <option value="4">Air PDAM</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="bahan_bakar">Bahan Bakar</label>
                </div>
              <select class="custom-select <?php echo form_error('bahan_bakar') ? 'is-invalid':'' ?>" name="bahan_bakar"> 
                  <option selected>Pilih...</option>
                  <option value="1">Kayu Bakar</option>
                  <option value="2">Arang</option>
                  <option value="3">Kompor Minyak Tanah</option>
                  <option value="4">Gas Elpiji</option>
                </select>
              </div>

			<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="konsumsi_daging">Konsumsi Daging</label>
                </div>
              <select class="custom-select <?php echo form_error('konsumsi_daging') ? 'is-invalid':'' ?>" name="konsumsi_daging"> 
                  <option selected>Pilih...</option>
                  <option value="1">1x Seminggu</option>
                  <option value="2">2x Seminggu</option>
                  <option value="3">3x Seminggu</option>
                  <option value="4">Lebih Dari 3x Seminggu</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="pakaian">Pakaian</label>
                </div>
              <select class="custom-select <?php echo form_error('pakaian') ? 'is-invalid':'' ?>" name="pakaian"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tidak Sama Sekali</option>
                  <option value="2">1 Stel / tahun</option>
                  <option value="3">2 Stel / tahun</option>
                  <option value="4">Lebih Dari 2 Stel / tahun</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="makan_sehari">Makanan</label>
                </div>
              <select class="custom-select <?php echo form_error('makan_sehari') ? 'is-invalid':'' ?>" name="makan_sehari"> 
                  <option selected>Pilih...</option>
                  <option value="1">1x Sehari</option>
                  <option value="2">2x Sehari</option>
                  <option value="3">3x Sehari</option>
                  <option value="4">Lebih Dari 3x Sehari</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="bayar_obat">Pengobatan</label>
                </div>
              <select class="custom-select <?php echo form_error('bayar_obat') ? 'is-invalid':'' ?>" name="bayar_obat"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tidak Sama Sekali</option>
                  <option value="2">Puskesmas</option>
                  <option value="3">Alternatif</option>
                  <option value="4">Rumah Sakit</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="penghasilan">Penghasilan</label>
                </div>
              <select class="custom-select <?php echo form_error('penghasilan') ? 'is-invalid':'' ?>" name="penghasilan"> 
                  <option selected>Pilih...</option>
                  <option value="1"> < 600.000</option>
                  <option value="2">600.000 – 1.000.000</option>
                  <option value="3">1.000.000 – 2.000.000</option>
                  <option value="4"> > 2.000.000</option>
                </select>
              </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="pendidikan">Pendidikan</label>
                </div>
              <select class="custom-select <?php echo form_error('pendidikan') ? 'is-invalid':'' ?>" name="pendidikan"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tidak Sekolah</option>
                  <option value="2">SD</option>
                  <option value="3">SMP</option>
                  <option value="4">SMA</option>
                </select>
              </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="tabungan">Tabungan</label>
                </div>
              <select class="custom-select <?php echo form_error('tabungan') ? 'is-invalid':'' ?>" name="tabungan"> 
                  <option selected>Pilih...</option>
                  <option value="1">Tidak Mempunyai Tabungan</option>
                  <option value="2">Tabungan Hanya Untuk Kehidupan Sehari</option>
                  <option value="3">Tabungan Hanya Untuk Kehidupan Seminggu</option>
                  <option value="4">Mempunyai Tabungan</option>
                </select>
              </div>

							
			<input class="btn btn-success float-right" type="submit" name="btn" value="Cek Kelayakan" />
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