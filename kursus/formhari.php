<?php include_once('header.php'); ?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_finansial");

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  //ambil data dari tiap elemen dalam form
  $hari = $_POST["hari"];

  
 //query insert data
  $query = "INSERT INTO 
          tb_hari VALUES ('','$hari')";
  mysqli_query($conn, $query);

  //cek data berhasil ditambahkan
  if( mysqli_affected_rows($conn) > 0 ){
    echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'listhari.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'listhari.php';
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
                  <label for="exampleInputEmail1">Hari dan Waktu</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="hari" placeholder="Hari Kursus">
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