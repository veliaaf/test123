<?php
//debug_backtrace() || die ("Direct access not permitted");
$server = "localhost";
$username = "root";
$password = "";
$database = "db_finansial";

$db = mysqli_connect($server, $username, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
echo "koneksi berhasil";
?>



/* Koneksi dan memilih database di server
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
*/