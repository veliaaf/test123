<?php include_once('header.php'); ?>
<?php 

$hariwaktu = query("SELECT * FROM tb_hari");

//tombol cari ditekan
if( isset($_POST["cari4"]) ) {
  $hariwaktu = cari4($_POST["keyword"]);
}

 ?>

      <h1>
        List Data Hari & Waktu Kursus
      </h1>
      

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List Data Hari & Waktu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
<a href="formhari.php">Tambah Data</a>
<br><br>   



<form action="" method="post">
  
  <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari4">Cari!</button>

</form>
<br>

<table class="table is-striped" border="1" cellpadding="30" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Hari dan Waktu</th>
 
    
  </tr>

<?php $i = 1; ?>
<?php foreach( $hariwaktu as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="edithari.php?id=<?= $row["id"]; ?>">edit</a> |
      <a href="hapushari.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a>
    </td>
    <td><?= $row["hari"]; ?></td>

    
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>


<?php include_once('footer.php'); ?>