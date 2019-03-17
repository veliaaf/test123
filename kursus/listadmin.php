<?php 
require 'functions.php';
$login = query("SELECT * FROM tb_login");
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Admin</title>
</head>
<body>

<h1> List Data Admin Kursus </h1>

<a href="">Tambah Data</a>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>

<?php $i = 1; ?>
<?php foreach( $login as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["password"]; ?></td>
		<td>
			<a href="">edit</a>
			<a href="">hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>


</table>

</body>
</html>