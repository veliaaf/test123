<?php include_once('header.php'); ?>
<?php 

$pengajar = query("SELECT * FROM tb_pengajar");

//tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $pengajar = cari($_POST["keyword"]);
}

 ?>
 

      <h1>
        List Data Pengajar
      </h1>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">       -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List Data Pengajar Kursus</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

<a href="formpengajar.php">Tambah Data Pengajar</a>
<br><br>            


<form action="" method="post">
  
  <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari">Cari!</button>

</form>
<br>

<table class="table is-striped" border="1" cellpadding="30" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Nama Pengajar</th>
    <th>No HP</th>
    <th>Alamat</th>
    <th>Aksi</th>
    
  </tr>

<?php $i = 1; ?>
<?php foreach( $pengajar as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $row["nama_pengajar"]; ?></td>
    <td><?= $row["hp_pengajar"]; ?></td>
    <td><?= $row["alamat_pengajar"]; ?></td>
    <td>
      <a href="editpengajar.php?id=<?= $row["id"]; ?>">edit</a> |
      <a href="hapuspengajar.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a>
    </td>
    
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>

<?php include_once('footer.php'); ?>