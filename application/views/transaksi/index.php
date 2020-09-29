<div class="container">
	<div class="row my-2">
		<div class="col-lg my-2 py-2 header-title">
			<h3><i class="fas fa-fw fa-handshake"></i> Daftar Transaksi</h3>
		</div>
		<div class="col-lg my-2 py-2 header-button">
			<a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahTransaksiModal"><i class="fas fa-fw fa-plus"></i> Tambah</a>
			<!-- Modal -->
			<div class="modal fade" id="tambahTransaksiModal" tabindex="-1" aria-labelledby="tambahTransaksiModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <form action="<?= base_url('transaksi/addTransaksi'); ?>" method="post">
			    	<div class="modal-content text-left">
				      <div class="modal-header">
				        <h5 class="modal-title" id="tambahTransaksiModalLabel"><i class="fas fa-fw fa-handshake"></i><sup><i class="fas fa-1x fa-plus"></i></sup> Tambah Transaksi</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
				      		<div class="col-lg-4">
				      			<div class="form-group">
						      		<label for="kuantitas">Kuantitas</label>
						      		<input type="number" min="1" id="kuantitas" class="form-control" placeholder="Masukkan Kuantitas" name="kuantitas" required>
						      	</div>
				      		</div>
				      		<div class="col-lg">
				      			<div class="form-group">
						      		<label for="id_menu">Nama Menu</label>
						      		<select name="id_menu" id="id_menu" class="form-control">
						      			<?php foreach ($menu as $dm): ?>
							      			<option value="<?= $dm['id_menu']; ?>"><?= $dm['nama_menu']; ?> | Rp. <?= ucwords($dm['harga_menu']); ?></option>
						      			<?php endforeach ?>
						      		</select>
						      	</div>
				      		</div>
				      	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
				        <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>
				      </div>
				    </div>
			    </form>
			  </div>
			</div>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg my-2 py-2">
			<div class="table-responsive">
				<table id="table_id" class="table text-center table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Invoice</th>
						<th>Kuantitas</th>
						<th>Status Bayar</th>
						<th>Tanggal Transaksi</th>
						<th>Nama Menu</th>
						<th>Dilakukan Oleh</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($transaksi as $dt): ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $dt['kode_invoice']; ?></td>
							<td><?= $dt['kuantitas']; ?></td>
							<td><?= $dt['status_bayar']; ?></td>
							<td><?= date('d-m-Y, H:i:s', $dt['tgl_transaksi']); ?></td>
							<td><?= $dt['nama_menu']; ?></td>
							<td><?= $dt['nama_user']; ?></td>
							<td>
								<a class="btn m-1 btn-info" href="" data-toggle="modal" data-target="#ubahTransaksiModal<?= $dt['id_transaksi']; ?>"><i class="fas fa-fw fa-edit"></i> Ubah</a>
								<div class="modal fade" id="ubahTransaksiModal<?= $dt['id_transaksi']; ?>" tabindex="-1" aria-labelledby="ubahTransaksiModalLabel<?= $dt['id_transaksi']; ?>" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <form action="<?= base_url('transaksi/editTransaksi/' . $dt['id_transaksi']); ?>" method="post">
									    	<div class="modal-content text-left">
										      <div class="modal-header">
										        <h5 class="modal-title" id="ubahTransaksiModalLabel<?= $dt['id_transaksi']; ?>"><i class="fas fa-fw fa-handshake"></i><sup><i class="fas fa-1x fa-edit"></i></sup> Ubah Transaksi</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	<div class="row">
										      		<div class="col-lg-4">
										      			<div class="form-group">
												      		<label for="kuantitas<?= $dt['id_transaksi']; ?>">Kuantitas</label>
												      		<input type="number" id="kuantitas<?= $dt['id_transaksi']; ?>" class="form-control" placeholder="Masukkan kuantitas" name="kuantitas" value="<?= $dt['kuantitas']; ?>" required>
												      	</div>
										      		</div>
										      		<div class="col-lg">
										      			<div class="form-group">
												      		<label for="id_menu<?= $dt['id_transaksi']; ?>">Nama Menu</label>
												      		<select name="id_menu" id="id_menu" class="form-control">
												      			<option value="<?= $dt['id_menu']; ?>"><?= $dt['nama_menu']; ?></option>
												      			<?php foreach ($menu as $dm): ?>
												      				<?php if ($dm['id_menu'] !== $dt['id_menu']): ?>
														      			<option value="<?= $dm['id_menu']; ?>"><?= $dm['nama_menu']; ?></option>
												      				<?php endif ?>
												      			<?php endforeach ?>
												      		</select>
												      	</div>
										      		</div>
										      	</div>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
										        <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
										      </div>
										    </div>
									    </form>
									  </div>
									</div>
								<a class="btn m-1 btn-danger btn-delete" data-name="<?= $dt['kode_invoice']; ?>" href="<?= base_url('transaksi/deleteTransaksi/' . $dt['id_transaksi']); ?>"><i class="fas fa-fw fa-trash"></i> Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
				</table>
			</div>	
		</div>
	</div>
</div>