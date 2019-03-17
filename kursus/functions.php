<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_finansial");



//menampilkan data tabel
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_registrasi WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus2($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_pengajar WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus3($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_ruangan WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus4($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_hari WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus5($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_kursus WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus6($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_jadwal WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function cari($keyword) {
	$query = "SELECT * FROM tb_pengajar
				WHERE
				nama_pengajar LIKE '%$keyword%' OR
				hp_pengajar LIKE '%$keyword%' OR
				alamat_pengajar LIKE '%$keyword%'
				";
	return query($query);
}

function cari2($keyword) {
	$query = "SELECT * FROM tb_ruangan
				WHERE
				nomor_ruangan LIKE '%$keyword%' OR
				detail_ruangan LIKE '%$keyword%' OR
				jumlah LIKE '%$keyword%'
				";
	return query($query);
}

function cari3($keyword) {
	$query = "SELECT * FROM tb_registrasi
				WHERE
				nama LIKE '%$keyword%' OR
				jk LIKE '%$keyword%' OR
				ttl LIKE '%$keyword%' OR
				alamat LIKE '%$keyword%' OR
				nohp LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jenis_kursus LIKE '%$keyword%' OR
				hari LIKE '%$keyword%' 
				
				";
	return query($query);
}

function cari4($keyword) {
	$query = "SELECT * FROM tb_hari
				WHERE
				hari LIKE '%$keyword%'
				
				";
	return query($query);
}

function cari5($keyword) {
	$query = "SELECT * FROM tb_jadwal
				WHERE
				nama_pengajar LIKE '%$keyword%' OR
				nomor_ruangan LIKE '%$keyword%' OR
				hari_waktu LIKE '%$keyword%'
				";
	return query($query);
}

function cari6($keyword) {
	$query = "SELECT * FROM tb_kursus
				WHERE
				nama_kursus LIKE '%$keyword%' OR
				biaya LIKE '%$keyword%'
				";
	return query($query);
}

function edit($data){
	global $conn;
	$id = $data["id"];
	$nama_pengajar = $data["nama_pengajar"];
  	$hp_pengajar = $data["hp_pengajar"];
  	$alamat_pengajar = $data["alamat_pengajar"];

  	$query = "UPDATE tb_pengajar SET
  				nama_pengajar = '$nama_pengajar',
  				hp_pengajar = '$hp_pengajar',
  				alamat_pengajar = '$alamat_pengajar'
  				WHERE id = $id
  				";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit1($data){
	global $conn;
	$id = $data["id"];
	$nomor_ruangan = $data["nomor_ruangan"];
  	$detail_ruangan = $data["detail_ruangan"];
  	$jumlah = $data["jumlah"];

  	$query = "UPDATE tb_ruangan SET
  				nomor_ruangan = '$nomor_ruangan',
  				detail_ruangan = '$detail_ruangan',
  				jumlah = '$jumlah'
  				WHERE id = $id
  				";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit2($data){
	global $conn;
	$id = $data["id"];
	$nama = $data["nama"];
  	$jk = $data["jk"];
  	$ttl = $data["ttl"];
  	$alamat = $data["alamat"];
  	$nohp = $data["nohp"];
  	$email = $data["email"];
  	$jenis_kursus = $data["jenis_kursus"];
  	$hari = $data["hari"];
  	

  	$query = "UPDATE tb_registrasi SET
  				nama = '$nama',
  				jk = '$jk',
  				ttl = '$ttl',
  				alamat = '$alamat',
  				nohp = '$nohp',
  				email = '$email',
  				jenis_kursus = '$jenis_kursus',
  				hari = '$hari'
  				WHERE id = $id
  				";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit3($data){
	global $conn;
	$id = $data["id"];
	$hari = $data["hari"];
  	
  	
  	$query = "UPDATE tb_hari SET
  				hari = '$hari'
  				
  				WHERE id = $id
  				";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit4($data){
	global $conn;
	$id = $data["id"];
	$nama_pengajar = $data["nama_pengajar"];
  	
  	$query = "UPDATE tb_hari SET
  				nama_pengajar = '$nama_pengajar'
  				WHERE id = $id
  				";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function edit5($data){
	global $conn;
	$id = $data["id"];
	$nama_kursus = $data["nama_kursus"];
  	$biaya = $data["biaya"];

  	$query = "UPDATE tb_ruangan SET
  				nama_kursus = '$nama_kursus',
  				biaya = '$biaya'
  				WHERE id = $id
  				";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM tb_login WHERE username = '$username'");
	if(mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert('username sudah terdaftar');
		</script>";

		return false;

	}

	//cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
			alert('konfirmasi password tidak sesuai');
			</script>";
		return false;
	}

	//tambahkan admin baru ke database
	mysqli_query($conn, "INSERT INTO tb_login VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);


}



?>