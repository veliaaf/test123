<?
function upload() {
		$namafile = $_FILES['foto']['name'];
		$ukuranfile = $_FILES['foto']['size'];
		$error = $_FILES['foto']['error'];
		$tmpname = $_FILES['foto']['tmpa_name'];

		//cek apakah tidak ada gambar yang di upload
		//cek apakah yang diupload adalah foto
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namafile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if(!in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "	<script>
					alert('yang diupload bukan gambar/foto');
					</script>
				"
			return false;
		}
		//cek jika ukurannya terlalu besar
		if( $ukuranfile > 1000000 ) {
			echo "	<script>
					alert('ukuran gambar/foto terlalu besar');
					</script>
				"
			return false;	
		}

		//gambar siap diupload
		move_uploaded_file($tmpname, 'img/'. $namafile);

		return $namafile;

}
?>