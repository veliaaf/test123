<?php include_once('header.php'); ?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_finansial");

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  //ambil data dari tiap elemen dalam form
  $nama_pengajar = $_POST["nama_pengajar"];
  $hp_pengajar = $_POST["hp_pengajar"];
  $alamat_pengajar = $_POST["alamat_pengajar"];
   
 //query insert data
  $query = "INSERT INTO 
          tb_pengajar VALUES ('','$nama_pengajar','$hp_pengajar','$alamat_pengajar')";
  mysqli_query($conn, $query);

  //cek data berhasil ditambahkan
  if( mysqli_affected_rows($conn) > 0 ){
    echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'listpengajar.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'listpengajar.php';
      </script>
    ";
  }

  }

 ?>
    <h3>
    Isian
    </h3>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pengajar</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pengajar" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="hp_pengajar" placeholder="Nomor Hp">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="alamat_pengajar" placeholder="Alamat">
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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