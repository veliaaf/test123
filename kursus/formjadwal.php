<?php include_once('header.php'); ?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_finansial");

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  //ambil data dari tiap elemen dalam form
  $nama_pengajar = $_POST["nama_pengajar"];
  $nama_kursus = $_POST["nama_kursus"];
  $nomor_ruangan = $_POST["nomor_ruangan"];
  $hari = $_POST["hari"];
  
 //query insert data
  $query = "INSERT INTO 
          tb_jadwal VALUES ('','$nama_pengajar','$nama_kursus','$nomor_ruangan','$hari')";
  mysqli_query($conn, $query);

  //cek data berhasil ditambahkan
  if( mysqli_affected_rows($conn) > 0 ){
    echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'listjadwal.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'listjadwal.php';
      </script>
    ";
  }

  }

 ?>
      <h3>
      Isian Data
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
            <form action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pengajar</label>
                  <select name="nama_pengajar" id="Pengajar" class="form-control">
                    <option value=" ">-Pilih-</option>
                    <?php 
                    $sql_pengajar = mysqli_query($conn, "SELECT *FROM tb_pengajar") or die (mysqli_error($conn));
                    while ($data_pengajar = mysqli_fetch_array($sql_pengajar)) {
                      echo '<option value="'.$data_pengajar['id'].'">'.$data_pengajar['nama_pengajar'].'</option>';
                    }

                     ?>

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kursus</label>
                  <select name="nama_kursus" id="kursus" class="form-control">
                    <option value=" ">-Pilih-</option>
                    <?php 
                    $sql_kursus = mysqli_query($conn, "SELECT *FROM tb_kursus") or die (mysqli_error($conn));
                    while ($data_kursus = mysqli_fetch_array($sql_kursus)) {
                      echo '<option value="'.$data_kursus['id'].'">'.$data_kursus['nama_kursus'].'</option>';
                    }

                     ?>

                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Ruangan</label>
                  <select name="nomor_ruangan" id="ruangan" class="form-control">
                    <option value=" ">-Pilih-</option>
                    <?php 
                    $sql_ruangan = mysqli_query($conn, "SELECT *FROM tb_ruangan") or die (mysqli_error($conn));
                    while ($data_ruangan = mysqli_fetch_array($sql_ruangan)) {
                      echo '<option value="'.$data_ruangan['id'].'">'.$data_ruangan['nomor_ruangan'].'</option>';
                    }

                     ?>

                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Hari dan Waktu</label>
                  <select name="hari" id="hari" class="form-control">
                    <option value=" ">-Pilih-</option>
                    <?php 
                    $sql_hari = mysqli_query($conn, "SELECT *FROM tb_hari") or die (mysqli_error($conn));
                    while ($data_hari = mysqli_fetch_array($sql_hari)) {
                      echo '<option value="'.$data_hari['id'].'">'.$data_hari['hari'].'</option>';
                    }

                     ?>

                  </select>
                </div>

                

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