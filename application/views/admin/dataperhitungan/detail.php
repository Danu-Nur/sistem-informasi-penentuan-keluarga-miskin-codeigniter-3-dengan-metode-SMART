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

				<!-- DataTables -->

				<div class="card mb-3">
					<div class="card-header">
						<h5>Tabel Penduduk</h5>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Penduduk</th>
										<th>NIK</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Hasil Smart</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($detail as $d1): ?>
									<tr>
										<!-- <td>
											<?php echo $no++?>
										</td> -->
										<td width="150">
											<?php echo $d1->NAMA_PENDUDUK ?>
										</td>
										<td>
											<?php echo $d1->NIK?>
										</td>
										<td>
											<?php echo $d1->JEN_KEL?>
										</td>
										<td>
											<?php echo $d1->ALAMAT?>
										</td>
										<td>
											<?php echo $d1->HASIL_HITUNG?>
										</td>
										<td>
											<?php echo $d1->STATUS?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<div class="card-header">
					<h5>Tabel Nilai Alternatif</h5>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<!-- <th>No</th> -->
										<th>Luas Lantai</th>
										<th>Jenis Lantai</th>
										<th>Jenis Dinding</th>
										<th>Kamar Mandi</th>
										<th>Pakaian</th>
										<th>Lampu</th>
										<th>Air Minum</th>
										<th>Bahan Bakar</th>
										<th>Konsumsi Daging</th>
										<th>Makan Sehari</th>
										<th>Bayar Obat</th>
										<th>Penghasilan</th>
										<th>Pendidikan</th>
										<th>Tabungan</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($detail as $d2): ?>
									<tr>
										<!-- <td>
											<?php echo $no++?>
										</td> -->
										<td >
											<?php echo $d2->LUAS_LANTAI ?>
										</td>
										<td>
											<?php echo $d2->JENIS_LANTAI?>
										</td>
										<td>
											<?php echo $d2->JENIS_DINDING?>
										</td>
										<td >
											<?php echo $d2->TIDAKADA_KM ?>
										</td>
										<td>
											<?php echo $d2->PAKAIAN?>
										</td>
										<td>
											<?php echo $d2->LAMPU?>
										</td>
										<td >
											<?php echo $d2->AIR_MINUM ?>
										</td>
										<td>
											<?php echo $d2->BAHAN_BAKAR?>
										</td>
										<td>
											<?php echo $d2->KONSUMSI_DAGING?>
										</td>
										<td >
											<?php echo $d2->MAKAN_SEHARI ?>
										</td>
										<td>
											<?php echo $d2->BAYAR_OBAT?>
										</td>
										<td>
											<?php echo $d2->PENGHASILAN?>
										</td>
										<td >
											<?php echo $d2->PENDIDIKAN ?>
										</td>
										<td>
											<?php echo $d2->TABUNGAN?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>