<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();

 // tabel nilai
 }
public function insert($nim, $nama, $uts, $uas, $tugas)
{
	 $na = $this->na($uts,$tugas,$uas);
	 $status = $this->status($na); $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) 
	 VALUES ('$nim', '$nama', '$uts', '$uas', '$tugas', '$na', '$status')";
	 $this->conn->query($sql);
}
public function na($uts,$tugas,$uas)
{
	 $na=(0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
	 	return $na;
}
public function status($na)
{
	 $status="";
	 if($na >=60 && $na <=100){
	 	$status="Lulus";
	}else{
	 	$status="Tidak Lulus";
	}
	return $status;
}
public function tampil_data()
{
	 $sql = "SELECT * FROM tbl_nilai";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
		 return $baris;
	 }
}
public function edit($id)
{
	 $sql = "SELECT * FROM tbl_nilai WHERE nim='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
	 }
	 return $baris;
}
public function update($nim, $nama, $uts, $tugas,$uas)
{
	 $na=$this->na($uts,$tugas,$uas);
	 $status=$this->status($na);
	 $sql = "UPDATE tbl_nilai SET nama='$nama', uts='$uts', uas='$uas', tugas='$tugas', na='$na',status='$status' WHERE nim='$nim'";
	 $this->conn->query($sql);
}
public function delete($nim)
{ 
	$sql = "DELETE FROM tbl_nilai WHERE nim='$nim'";
	$this->conn->query($sql);
}

// tabel mahasiswa
 public function insert_mhs($id, $nama, $semester, $alamat, $no_tlp, $email)
{
	$sql = "INSERT INTO mahasiswa (id, nama, semester, alamat, no_tlp, email) 
	VALUES ('$id', '$nama','$semester', '$alamat', '$no_tlp', '$email')";
	$this->conn->query($sql);
}
public function tampil_data_mhs()
{
	 $sql = "SELECT * FROM mahasiswa";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_mhs($id)
{
	 $sql = "SELECT * FROM mahasiwa WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_mhs($id, $nama, $semester, $alamat, $no_tlp, $email)
{
	 $sql = "UPDATE mahasiswa SET nama='$nama', semester='$semester', alamat='$alamat', no_tlp='$no_tlp', email='$email' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_mhs($id)
{ 
	$sql = "DELETE FROM mahasiswa WHERE id='$id'";
	$this->conn->query($sql);
}

 // tabel absen
 public function insert_absen($id, $mhs_id, $matakuliah_id, $waktu_absen, $status)
{
	$sql = "INSERT INTO absen (id, mhs_id, matakuliah_id, waktu_absen, status) 
	VALUES ('$id', '$mhs_id','$matakuliah_id', '$waktu_absen', '$status')";
	$this->conn->query($sql);
}
public function tampil_data_absen()
{
	 $sql = "SELECT * FROM absen";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_absen($id)
{
	 $sql = "SELECT * FROM absen WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;          
 }
	 return $baris;
}
public function update_absen($id, $mhs_id, $matakuliah_id, $waktu_absen, $status)
{
	 $sql = "UPDATE absen SET mhs_id='$mhs_id', matakuliah_id='$matakuliah_id', waktu_absen='$waktu_absen', status='$status' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_absen($id)
{ 
	$sql = "DELETE FROM absen WHERE id='$id'";
	$this->conn->query($sql);
}

// tabel kontrak mk
public function insert_kontrak($mk_id, $mhs_id)
{
	$sql = "INSERT INTO kontrak_mk (mk_id, mhs_id) 
	VALUES ('$mk_id', '$mhs_id')";
	$this->conn->query($sql);
}
public function tampil_data_kontrak()
{
	 $sql = "SELECT * FROM kontrak_mk";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_kontrak($mk_id)
{
	 $sql = "SELECT * FROM kontrak_mk WHERE mk_id='$mk_id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;          
 }
	 return $baris;
}
public function update_kontrak($mk_id, $mhs_id)
{
	 $sql = "UPDATE kontrak_mk SET mk_id='$mk_id', mhs_id='$mhs_id' WHERE mk_id='$mk_id'";
	 $this->conn->query($sql);
}
public function delete_kontrak($mk_id)
{ 
	$sql = "DELETE FROM kontrak_mk WHERE mk_id='$mk_id'";
	$this->conn->query($sql);
}

// tabel matakuliah
public function insert_mk($id, $nama_mk)
{
	$sql = "INSERT INTO matakuliah (id, nama_mk) 
	VALUES ('$id', '$nama_mk')";
	$this->conn->query($sql);
}
public function tampil_data_mk()
{
	 $sql = "SELECT * FROM matakuliah";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_mk($id)
{
	 $sql = "SELECT * FROM matakuliah WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;          
 }
	 return $baris;
}
public function update_mk($id, $nama_mk)
{
	 $sql = "UPDATE matakuliah SET id='$id', nama_mk='$nama_mk' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_mk($id)
{ 
	$sql = "DELETE FROM matakuliah WHERE id='$id'";
	$this->conn->query($sql);
}
}

