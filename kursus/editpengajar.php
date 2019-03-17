<?php include_once('header.php'); ?>
<?php 


//ambil data di url
$id = $_GET["id"];

//query data pengajar berdasar id
$pengajar = query("SELECT * FROM tb_pengajar WHERE id = $id")[0];

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  //cek data berhasil diedit
  if( edit($_POST) > 0 ){
    echo "
      <script>
      alert('data berhasil diedit');
      document.location.href = 'listpengajar.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal diedit');
      document.location.href = 'listpengajar.php';
      </script>
    ";
  }

  }

 ?>
      <h1>
        Edit Data Pengajar
      </h1>
      

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $pengajar["id"]; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pengajar</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pengajar" placeholder="Nama" value="<?= $pengajar["nama_pengajar"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="hp_pengajar" placeholder="Nomor HP" value="<?= $pengajar["hp_pengajar"]; ?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="alamat_pengajar" placeholder="Alamat" value="<?= $pengajar["alamat_pengajar"]; ?>">
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Edit Data</button>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
   
   <?php include_once('footer.php'); ?>