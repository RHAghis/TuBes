<!doctype html>
<html lang="en">

<?php $this->load->view('Header'); ?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php $this->load->view('Navbar'); ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php $this->load->view('Sidebar'); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Data Satuan Barang</h3>
									<div class="alert alert-info alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										Klik <i class="fa fa-plus-circle "></i><a href="<?php echo site_url();?>/SatuanBarang/viewAddSatuan"> Disini</a> Untuk Menambah Data
									</div>
								</div>
								<div class="panel-body">
									<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
									<div class="table-responsive">
										<table class="table table-hover" id="example">
											<thead>
												<tr>
													<th>#</th>
													<th>Nama Satuan</th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no=0;
													foreach ($satuan_list as $key) {
												?>
													<tr>
														<td><?php $no++; echo $no; ?></td>
														<td><?php echo $key->nama ?></td>

														<td><a href="<?php echo site_url() ?>/SatuanBarang/updateSatuan/<?php echo $key->kdSatuan ?>"><button type="button" class="btn btn-primary btn-xs" data-title="edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button> <a href="<?php echo site_url() ?>/SatuanBarang/deleteSatuan/<?php echo $key->kdSatuan ?>"><button type="button" class="btn btn-danger btn-xs" data-title="delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></a></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<?php $this->load->view('Footer'); ?>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
