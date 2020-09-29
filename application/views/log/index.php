<div class="container">
	<div class="row">
		<div class="col-lg my-2 py-2 header-title">
			<h3>Daftar Log</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg my-2 py-2">
			<div class="table-responsive">
				<table id="table_id" class="table text-center table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Isi Log</th>
						<th>Tanggal Log</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($daftar_log as $log): ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $log['isi_log']; ?></td>
							<td> <?= date('d-m-Y, H:i:s', $log['tanggal_log']); ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
				</table>
			</div>	
		</div>
	</div>
</div>