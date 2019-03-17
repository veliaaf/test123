<?php include_once('header.php'); ?>
<?php

$peserta = query("SELECT * FROM tb_registrasi");

//tombol cari ditekan
if( isset($_POST["cari3"]) ) {
  $peserta = cari3($_POST["keyword"]);
}

 ?>
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Aksi</th>
                  <th>Nama Peserta</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Nomor HP</th>
                  <th>E-mail</th>
                  <th>Foto</th>
                  <th>Jenis Kursus</th>
                  <th>Hari</th>
                  <th>Biaya</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach( $peserta as $row) : ?>
                </thead>
                <tbody>
                <tr>
                  <td><?= $i; ?></td>
                  <td>
                    <a href="editpeserta.php?id=<?= $row["id"]; ?>">edit</a> |
                    <a href="hapuspeserta.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah yakin?');">hapus</a>               |
                    <a href="rincianpeserta.php?id=<?= $row["id"]; ?>">rincian</a>
                  </td>
                  <td><?= $row["nama"]; ?></td>
                  <td><?= $row["jk"]; ?></td>
                  <td><?= $row["ttl"]; ?></td>
                  <td><?= $row["alamat"]; ?></td>
                  <td><?= $row["nohp"]; ?></td>
                  <td><?= $row["email"]; ?></td>
                  <td><img src="img/ <?= $row["foto"]; ?>"></td>
                  <td><?= $row["jenis_kursus"]; ?></td>
                  <td><?= $row["hari"]; ?></td>
                  <td><?= $row["biaya"]; ?></td>
                </tr>
                 <?php $i++; ?>
                <?php endforeach; ?>


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('footer.php'); ?>