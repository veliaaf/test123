<?php include_once('header.php'); ?>
<?php 

$kursus = query("SELECT * FROM tb_kursus");

//tombol cari ditekan
if( isset($_POST["cari6"]) ) {
  $kursus = cari6($_POST["keyword"]);
}

 ?>
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"> -->
      <h1>
        List Data
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
    <a href="formkursus.php">Tambah Data</a>
<br><br>          



<form action="" method="post">
  <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari6">Cari!</button>

</form>
<br>

<table class="table is-striped" border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Biaya</th>
    <th>Aksi</th>
       
    
  </tr>

<?php $i = 1; ?>
<?php foreach( $kursus as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $row["nama_kursus"]; ?></td>
    <td><?= $row["biaya"]; ?></td>
    <td>
      <a href="editkursus.php?id=<?= $row["id"]; ?>">edit</a> |
      <a href="hapuskursus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a>
    </td>
    
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>

<?php include_once('footer.php'); ?>
            
       