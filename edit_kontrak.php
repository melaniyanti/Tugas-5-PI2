<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_kontrak($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Kontrak Matakuliah</title>
</head>

<body>
	<h1>Edit Data Kontrak Matakuliah</h1>
	<a href="kontrak.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>id_Matakuliah</label>
		<br>
		<input type="text" name="mk_id" value="<?php echo $data->mk_id ?>">
		<br>
		<label>Id_Mahasiswa</label>
		<br>
		<input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
		<br><br>
		<button type="submit" name="submit_edit_kontrak">Submit</button>
	</form>
</body>
</html> 