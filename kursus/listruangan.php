<?php include_once('header.php'); ?>
<?php 

$ruangan = query("SELECT * FROM tb_ruangan");

//tombol cari ditekan
if( isset($_POST["cari2"]) ) {
  $ruangan = cari2($_POST["keyword"]);
}

 ?>
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"> -->
      <h1>
        List Data Ruangan Kursus
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
            

<a href="formruangan.php">Tambah Data Ruangan</a>
<br><br>   

<form action="" method="post">
  <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari2">Cari!</button>

</form>
<br>

<table class="table is-striped" border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Nama Ruangan</th>
    <th>Detail Ruangan</th>
    <th>Jumlah Peserta</th>
    <th>Aksi</th>
    
  </tr>

<?php $i = 1; ?>
<?php foreach( $ruangan as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $row["nomor_ruangan"]; ?></td>
    <td><?= $row["detail_ruangan"]; ?></td>
    <td><?= $row["jumlah"]; ?></td>
    <td>
      <a href="editruangan.php?id=<?= $row["id"]; ?>">edit</a> |
      <a href="hapusruangan.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a>
    </td>
    
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>

<?php include_once('footer.php'); ?>
            
       