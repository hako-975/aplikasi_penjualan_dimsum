<div class="container">
	<div class="row my-2">
		<div class="col-lg header-title">
			<h3>Daftar User</h3>
		</div>

		<?php if ($dataUser['jabatan'] == 'administrator'): ?>
			<div class="col-lg header-button">
				<a href="" class="btn merah-baru" data-toggle="modal" data-target="#tambahUserModal"><i class="fas fa-fw fa-plus"></i> Tambah</a>
				<!-- Modal -->
				<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <form action="<?= base_url('main/addUser'); ?>" method="post">
				    	<div class="modal-content text-left">
					      <div class="modal-header">
					        <h5 class="modal-title" id="tambahUserModalLabel"><i class="fas fa-fw fa-user-plus"></i> Tambah User</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="form-group">
					      		<label for="nama_user">Nama User</label>
					      		<input type="text" id="nama_user" class="form-control" name="nama_user" required>
					      	</div>
					      	<div class="form-group">
					      		<label for="username">Username</label>
					      		<input type="text" id="username" class="form-control" name="username" required>
					      	</div>
					      	<div class="form-group">
					      		<label for="password">Password</label>
					      		<input type="password" id="password" class="form-control" name="password" required minlength="5">
					      	</div>
					      	<div class="form-group">
					      		<label for="password_verifikasi">Verifikasi Password</label>
					      		<input type="password" id="password_verifikasi" class="form-control" name="password_verifikasi" required minlength="5">
					      	</div>
					      	<div class="form-group">
					      		<label for="jabatan">Jabatan</label>
					      		<select name="jabatan" id="jabatan" class="form-control">
					      			<option value="administrator">Administrator</option>
					      			<option value="kasir">Kasir</option>
					      		</select>
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
			</div>
		<?php endif ?>
	</div>
	<div class="row my-2">
		<div class="col-lg">
			<div class="table-responsive">
				<table class="text-center table table-bordered table-hover table-striped" id="table_id">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama User</th>
							<th>Username</th>
							<th>Jabatan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbdody>
						<?php $i = 1; ?>
						<?php foreach ($user as $du): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $du['nama_user']; ?></td>
								<td><?= $du['username']; ?></td>
								<td><?= $du['jabatan']; ?></td>
								<td>
									<?php if ($dataUser['jabatan'] == 'administrator' || $dataUser['id_user'] == $du['id_user']): ?>
										<a class="btn btn-success" href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-fw fa-edit"></i> Ubah</a>
										<?php if ($du['jabatan'] != 'administrator'): ?>
											<?php if ($dataUser['jabatan'] == 'administrator'): ?>
												<a class="btn btn-danger btn-delete" data-name="<?= $du['nama_user']; ?>" href="<?= base_url('main/deleteUser/' . $du['id_user']); ?>"><i class="fas fa-fw fa-trash"></i> Hapus</a>
											<?php endif ?>
										<?php endif ?>
									<?php endif ?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbdody>
				</table>
			</div>
		</div>
	</div>
</div>