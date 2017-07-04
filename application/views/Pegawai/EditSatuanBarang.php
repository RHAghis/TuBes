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
									<h3 class="panel-title">Tambah Satuan Barang</h3>
								</div>
								<?php echo form_open_multipart('SatuanBarang/updateSatuan/'.$this->uri->segment(3)); ?>
								<div class="panel-body">
									<div class="col-md-6">
										<div class="form-group">
											<?php echo validation_errors(); ?>
											<label for="">Nama Satuan</label>
											<input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Satuan Barang" value="<?php echo $satuan_list[0]->nama; ?>">
										</div>
										<button type="submit" class="btn btn-primary">Simpan</button>
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
