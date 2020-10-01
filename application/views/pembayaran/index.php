<div class="container">
	<div class="row my-2">
		<div class="col-lg my-2 py-2 header-title">
			<h3><i class="fas fa-fw fa-dollar-sign"></i> Daftar Pembayaran</h3>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg">
			<div class="table-responsive">
				<table class="text-center table table-bordered table-hover table-striped" id="table_id">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode Invoice</th>
							<th>Total Pembayaran</th>
							<th>Tunai</th>
							<th>Kembalian</th>
							<th>Tanggal Pembayaran</th>
							<th>Status Bayar</th>
							<th>Dilakukan Oleh</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbdody>
						<?php $i = 1; ?>
						<?php foreach ($pembayaran as $dp): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td class="text-left"><?= $dp['kode_invoice']; ?></td>
								<td class="text-left">Rp. <?= number_format($dp['total_pembayaran']); ?></td>
								<td class="text-left">Rp. <?= number_format($dp['jml_uang_dibayar']); ?></td>
								<td class="text-left">Rp. <?= number_format($dp['kembalian']); ?></td>
								<td class="text-left"><?= date('d-m-Y, H:i:s', $dp['tgl_pembayaran']); ?></td>
								<td class="text-left">
									<?php if ($dp['status_bayar'] == 'belum_dibayar'): ?>
										<a href="<?= base_url('pembayaran/bayar/' . $dp['kode_invoice']); ?>" class="badge badge-danger"><i class="fas fa-fw fa-times"></i> Belum Dibayar</a>
									<?php else: ?>
										<span class="badge badge-success"><i class="fas fa-fw fa-check"></i> Sudah Dibayar</span>
									<?php endif ?>
								</td>
								<td class="text-left"><?= $dp['nama_user']; ?></td>
								<td>
									<?php if ($dp['status_bayar'] == 'belum_dibayar'): ?>
										<a href="<?= base_url('pembayaran/bayar/' . $dp['kode_invoice']); ?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-dollar-sign"></i> Bayar</a>
									<?php else: ?>
										<a onclick="window.print();" class="no_print btn btn-sm btn-success"><i class="fas fa-fw fa-print"></i> Cetak</a>
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