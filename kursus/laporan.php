<?php include_once('header.php'); ?>

<?php 

$laporan = query("SELECT * FROM tb_laporan");

//tombol cari ditekan
if( isset($_POST["cari6"]) ) {
  $laporan = cari6($_POST["keyword"]);
}

 ?>
 

      <h1>
        Laporan Peserta Kursus
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
              <h3 class="box-title">Laporan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            


<form action="" method="post">
  
  <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
  <button type="submit" name="cari6">Cari!</button>

</form>
<br>

<table class="table is-striped" border="1" cellpadding="30" cellspacing="0">

  <tr>
    <th>No.</th>
    <th>Nama Peserta</th>
    <th>Nama Pengajar</th>
    <th>Nama Ruangan</th>
    <th>Hari</th>
    <th>Jenis Kursus</th>
    <th>Biaya</th>
    
  </tr>

<?php $i = 1; ?>
<?php foreach( $laporan as $row) : ?>
  <tr>
    
    
  </tr>
  <?php $i++; ?>
<?php endforeach; ?>


</table>


<?php include_once('footer.php'); ?>