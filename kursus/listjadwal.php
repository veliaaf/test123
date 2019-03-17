<?php include_once('header.php'); ?>
<?php $conn = mysqli_connect("localhost", "root", "", "db_finansial"); ?>

<?php 

$jadwal = $conn->query("SELECT * FROM tb_kursus JOIN tb_jadwal ON tb_kursus.id=tb_jadwal.nama_kursus JOIN tb_pengajar ON tb_jadwal.nama_pengajar=tb_pengajar.id ON tb_jadwal.nama_pengajar=tb_pengajar.id JOIN tb_ruangan ON tb_jadwal.nama_ruangan=tb_ruangan.id");
$jadwal = $conn->query("SELECT * FROM tb_kursus JOIN tb_jadwal ON tb_kursus.id=tb_jadwal.nama_kursus JOIN tb_pengajar ON tb_jadwal.nama_pengajar=tb_pengajar.id JOIN tb_ruangan ON tb_jadwal.nama_ruangan=tb_ruangan.id ");
$jadwal = $conn->query("SELECT * FROM tb_kursus JOIN tb_jadwal ON tb_kursus.id=tb_jadwal.nama_kursus JOIN tb_pengajar ON tb_jadwal.nama_pengajar=tb_pengajar.id ");
$jadwal = $conn->query("SELECT * FROM tb_kursus JOIN tb_jadwal ON tb_kursus.id=tb_jadwal.nama_kursus JOIN tb_pengajar ON tb_jadwal.nama_pengajar=tb_pengajar.id ");

//tombol cari ditekan
if( isset($_POST["cari5"]) ) {
  $jadwal = cari5($_POST["keyword"]);
}

 ?>

      <h1>
        List Data Jadwal Kursus
      </h1>
      

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Jadwal Kursus</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
<a href="formjadwal.php">Tambah Data</a>
<br><br>   

<form action="" method="post">
  
  <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari5">Cari!</button>

</form>
<br>

<table class="table is-striped" border="1" cellpadding="30" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama Pengajar</th>
    <th>Nama Kursus</th>
    <th>Ruangan</th>
    <th>Hari dan Waktu</th>
    
  </tr>

<?php $i = 1; ?>
<?php foreach( $jadwal as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="hapusjadwal.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a>
    </td>
    <td><?= $row["nama_pengajar"]; ?></td>
    <td><?= $row["nama_kursus"]; ?></td>
    <td><?= $row["nomor_ruangan"]; ?></td>
    <td><?= $row["hari_waktu"]; ?></td>
    
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>



<?php include_once('footer.php'); ?>