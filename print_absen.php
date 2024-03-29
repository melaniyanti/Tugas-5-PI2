<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
	<style>
		h1 {
		text-align: center;
		}
		table, 
		td, 
		th {
		border: 1px solid #ddd;
		text-align: left;
		}
		table {
		border-collapse: collapse;
		width: 100%;
		}
		th, 
		td {
		padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Nilai Mahasiswa</h1>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Id</th>
				<th>Id_Mahasiswa</th>
				<th>Id_Matakuliah</th>
				<th>Waktu_Absen</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_absen();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
						<td><?=$data->id ?></td>
						<td><?=$data->mhs_id ?></td>
						<td><?=$data->matakuliah_id ?></td>
						<td><?=$data->waktu_absen ?></td>
						<td><?=$data->status ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html> 