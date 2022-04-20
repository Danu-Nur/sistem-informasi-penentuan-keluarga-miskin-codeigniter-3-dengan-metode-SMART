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
						<a href="<?php echo site_url('admin/Data_kriteria/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Luas Lantai</th>
										<th>Jenis Lantai</th>
										<th>Jenis Dinding</th>
										<th>Kamar Mandi</th>
										<th>Lampu</th>
										<th>Air Minum</th>
										<th>Bahan Bakar</th>
										<th>Konsumsi</th>
										<th>Pakaian</th>
										<th>Makanan</th>
										<th>Pengobatan</th>
										<th>Penghasilan</th>
										<th>Pendidikan</th>
										<th>Tabungan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_kriteria as $dk): ?>
									<tr>
										<td width="50">
											<?php echo $dk->LUAS_LANTAI ?>
										</td>
										<td width="50">
											<?php echo $dk->JENIS_LANTAI ?>
										</td>
										<td width="50">
											<?php echo $dk->JENIS_DINDING ?>
										</td>
										<td width="50">
											<?php echo $dk->KAMAR_MANDI ?>
										</td>
										<td width="50">
											<?php echo $dk->LAMPU ?>
										</td>
										<td width="50">
											<?php echo $dk->AIR_MINUM ?>
										</td>
										<td width="50">
											<?php echo $dk->BAHAN_BAKAR ?>
										</td>
										<td width="50">
											<?php echo $dk->KONSUMSI_DAGING ?>
										</td>
										<td width="50">
											<?php echo $dk->PAKAIAN ?>
										</td>
										<td width="50">
											<?php echo $dk->MAKANAN ?>
										</td>
										<td width="50">
											<?php echo $dk->PENGOBATAN ?>
										</td>
										<td width="50">
											<?php echo $dk->PENGHASILAN ?>
										</td>
										<td width="50">
											<?php echo $dk->PENDIDKAN ?>
										</td>
										<td width="50">
											<?php echo $dk->TABUNGAN ?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('admin/data_kriteria/edit/'.$dk->ID_KRITERIA) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/data_kriteria/delete/'.$dk->ID_KRITERIA) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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