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
									<h3 class="panel-title">Tambah Data Barang</h3>
								</div>
								<?php echo form_open_multipart('Barang/createBarang'); ?>
								<div class="panel-body">
									<div class="col-md-6">
										<div class="form-group">
											<?php echo validation_errors(); ?>
											<label for="">Kode Barang</label>
											<input class="form-control" type="text" id="kode" name="kode" placeholder="Kode Barang">
										</div>
										<div class="form-group">
											<label for="">Nama Barang</label>
											<input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Barang">
										</div>
										<div class="form-group">
											<label for="">Stok</label>
											<input class="form-control" type="text" id="stok" name="stok" placeholder="Stok Barang">
										</div>
										<div class="form-group">
											<label for="">Satuan</label>
											<select class="form-control" id="satuan" name="satuan">
												<option value='0'>--pilih--</option>
				                                <?php 
													foreach ($satuan_list as $prov) {
														echo "<option value='$prov[kdSatuan]'>$prov[nama]</option>";
													}
												?>
											</select>
										</div>
										<div class="form-group">
											<label for="">Kategori</label>
											<input class="form-control" type="text" id="kategori" name="kategori" placeholder="Kategori Barang">
										</div>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="">Harga Satuan</label>
											<input class="form-control" type="text" id="hargaSatuan" name="hargaSatuan" placeholder="Harga Satuan per Barang">
										</div>
										<div class="form-group">
											<label for="">Harga Beli</label>
											<input class="form-control" type="text" id="hargaBeli" name="hargaBeli" placeholder="Harga Beli Barang">
										</div>
										<div class="form-group">
											<label for="">Harga Jual</label>
											<input class="form-control" type="text" id="hargaJual" name="hargaJual" placeholder="Harga Jual per Barang">
										</div>
										<div class="form-group">
											<label for="">Persentase Untung</label>
											<input class="form-control" type="text" id="untung" name="untung" placeholder="Persentase Keuntungan Barang">
										</div>
										<div class="form-group">
											<label for="">Supplier</label>
											<input class="form-control" type="text" id="supplier" name="supplier" placeholder="Persentase Keuntungan Barang">
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
