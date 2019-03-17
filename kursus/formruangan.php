<?php include_once('header.php'); ?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_finansial");

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  //ambil data dari tiap elemen dalam form
  $nomor_ruangan = $_POST["nomor_ruangan"];
  $detail_ruangan = $_POST["detail_ruangan"];
  $jumlah = $_POST["jumlah"];
   
 //query insert data
  $query = "INSERT INTO 
          tb_ruangan VALUES ('','$nomor_ruangan','$detail_ruangan','$jumlah')";
  mysqli_query($conn, $query);

  //cek data berhasil ditambahkan
  if( mysqli_affected_rows($conn) > 0 ){
    echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'listruangan.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'listruangan.php';
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
                  <label for="exampleInputEmail1">Nomor Ruangan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nomor_ruangan" placeholder="Nomor Ruangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Detail Ruangan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="detail_ruangan" placeholder="Detail Ruangan">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="jumlah" placeholder="Jumlah">
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