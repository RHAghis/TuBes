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
									<h3 class="panel-title">Tambah Supplier</h3>
								</div>
								<?php echo form_open_multipart('Home/updateSupplier/'.$this->uri->segment(3)); ?>
								<?php echo validation_errors(); ?>
								<div class="panel-body">
									<div class="col-md-6">
										<div class="form-group">
											<label for="">Nama Supplier</label>
											<input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Supplier" value="<?php echo $supplier_list[0]->nama; ?>">
										</div>
										<div class="form-group">
											<label for="">Alamat</label>
											<input class="form-control" type="text" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $supplier_list[0]->alamat; ?>">
										</div>
										<div class="form-group">
											<label for="">Telepon</label>
											<input class="form-control" type="text" id="telp" name="telp" placeholder="No. Telp / HP" value="<?php echo $supplier_list[0]->telp ?>">
										</div>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
									<?php echo form_close(); ?>
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
