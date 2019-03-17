<?php include_once('header.php'); ?>
<?php 

//ambil data di url
$id = $_GET["id"];

//query data pengajar berdasar id
$ruangan = query("SELECT * FROM tb_ruangan WHERE id = $id")[0];

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  //cek data berhasil diedit
  if( edit1($_POST) > 0 ){
    echo "
      <script>
      alert('data berhasil diedit');
      document.location.href = 'listruangan.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal diedit');
      document.location.href = 'listruangan.php';
      </script>
    ";
  }

  }
 ?>
      <h1>
        Edit Data Ruangan
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
              <input type="hidden" name="id" value="<?= $ruangan["id"]; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Ruangan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nomor_ruangan" placeholder="Nomor Ruangan" value="<?= $ruangan["nomor_ruangan"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Detail Ruangan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="detail_ruangan" placeholder="Detail Ruangan" value="<?= $ruangan["detail_ruangan"]; ?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="jumlah" placeholder="Jumlah" value="<?= $ruangan["jumlah"]; ?>">
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