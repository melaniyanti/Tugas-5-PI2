<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<title>Data kontrak Matakuliah</title>
</head>

<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Pemrograman Internet 2</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="mahasiswa.php">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="absen.php">Absen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontrak.php">Kontrak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="matakuliah.php">Matakuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Nilai</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<h1>Data kontrak Matakuliah</h1>
<a href="create_kontrak.php">Tambah Data</a>
<br>
<a href="print_kontrak.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
  <thead>
    <tr>
      <th>No.</th>
      <th>Id_Matakuliah</th>
      <th>Id_Mahasiswa</th>
      <th>Aksi</th>
    </tr>
  </thead>
<tbody>
<?php
$result = $model->tampil_data_kontrak();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
      <td><?=$index++ ?></td>
      <td><?=$data->mk_id ?></td>
      <td><?=$data->mhs_id ?></td>
      <td><a name="edit" id="edit" href="edit_kontrak.php?id=<?=$data->mk_id ?>">Edit</a>
      <a name="hapus_kontrak" id="hapus_kontrak" href="proses.php?id=<?=$data->mk_id ?>">Delete</a>
      </td>
    </tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel kontrak matakuliah.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html> 