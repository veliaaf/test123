<?php
session_start(); 
require 'functions.php';

$id = $_GET["id"];

if( hapus5("$id") > 0 ) {
	echo "
	<script>
      alert('data berhasil dihapus');
      document.location.href = 'listkursus.php';
      </script>
	";
} else {
	echo "
	<script>
      alert('data gagal dihapus');
      document.location.href = 'listkursus.php';
      </script>
	";
}
 ?>