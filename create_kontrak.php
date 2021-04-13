<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Kontrak Matakuliah</title>
</head>

<body>
	<h1>Tambah Data Kontrak Matakuliah</h1>
	<a href="kontrak.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id_Matakuliah</label>
		<br>
		<input type="text" name="mk_id">
		<br>
		<label>Id_Mahasiswa</label>
		<br>
		<input type="text" name="mhs_id"><br>
		<br><br>
		<button type="submit" name="submit_simpan_kontrak">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 