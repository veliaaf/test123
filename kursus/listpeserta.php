<?php include_once('header.php'); ?>
<?php

$peserta = query("SELECT * FROM tb_registrasi");

//tombol cari ditekan
if( isset($_POST["cari3"]) ) {
  $peserta = cari3($_POST["keyword"]);
}

 ?>
    
      <h1>
        List Data Peserta Kursus
      </h1>
      
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
            </div>
            <!-- /.box-header -->
<a href="formregister.php">Tambah Data Peserta</a>
<br><br>

<form action="" method="post">
  <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari3">Cari!</button>

</form>
<br>

<table  border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama Peserta</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>Nomor HP</th>
    <th>E-mail</th>
    <th>Jenis Kursus</th>
    <th>Hari&Waktu</th>
  </tr>

<?php $i = 1; ?>
<?php foreach( $peserta as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="editpeserta.php?id=<?= $row["id"]; ?>">edit</a> |
      <a href="hapuspeserta.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a> 

    </td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["jk"]; ?></td>
    <td><?= $row["ttl"]; ?></td>
    <td><?= $row["alamat"]; ?></td>
    <td><?= $row["nohp"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jenis_kursus"]; ?></td>
    <td><?= $row["hari"]; ?></td>
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>

<?php include_once('footer.php'); ?>

            
          