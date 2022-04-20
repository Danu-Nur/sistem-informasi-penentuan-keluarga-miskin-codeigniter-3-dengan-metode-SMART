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
					<a class="btn btn-small btn-primary" href="<?php echo site_url('admin/Data_perhitungan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
						<a class="btn btn-small btn-success" href="<?php echo site_url('admin/Data_perhitungan/PlaySmart') ?>">Hitung Smart</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Penduduk</th>
										<th>Hasil</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($join as $j): ?>
									<tr>
										<td>
											<?php echo $no++?>
										</td>
										<td width="150">
											<?php echo $j->NAMA_PENDUDUK ?>
										</td>
										<td>
											<?php echo $j->HASIL_HITUNG?>
										</td>
										<td>
											<?php echo $j->STATUS?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('admin/Data_perhitungan/detailHitung/'.$j->ID_PENDUDUK) ?>"
											 class="btn btn-small"><i class="fas fa-file"></i> Detail</a>
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