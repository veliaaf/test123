<?php include_once('header.php'); ?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_finansial");

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  //ambil data dari tiap elemen dalam form
  $nama = $_POST["nama"];
  $jk = $_POST["jk"];
  $ttl = $_POST["ttl"];
  $alamat = $_POST["alamat"];
  $nohp = $_POST["nohp"];
  $email = $_POST["email"];
  $jenis_kursus = $_POST["jenis_kursus"];
  $hari = $_POST["hari"];
  
  
   
 //query insert data
  $query = "INSERT INTO 
          tb_registrasi VALUES ('','$nama','$jk','$ttl','$alamat','$nohp','$email','$jenis_kursus','$hari')";
  mysqli_query($conn, $query);

  //cek data berhasil ditambahkan
  if( mysqli_affected_rows($conn) > 0 ){
    echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'listpeserta.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'listpeserta.php';
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
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label> <br>
                  <select name="jk" class="select">
                        <option value="laki-laki"> laki-laki </option> 
                        <option value="perempuan"> perempuan </option> 
                  </select>
                </div>
                 <div class="form-group">
                  <label for="tanggal">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" name="ttl" placeholder="Tanggal Lahir" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Alamat" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Nomor HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nohp" placeholder="Nomor HP" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="E-mail" required>
                </div>
               <div class="form-group">
                  <label for="jenis_kursus">Jenis Kursus</label> <br>
                  <select name="jenis_kursus" class="select">
                        <option value="Pemrograman"> Pemrograman </option> 
                        <option value="Desain Grafis"> Desain Grafis </option> 
                        <option value="Web Design"> Web Design </option> 
                        
                </select>
                </div>
                <div class="form-group">
                  <label for="hari">Hari & Waktu</label> <br>
                  <select name="hari" class="select">
                        <option value="Jumat-Sabtu (16.00-18.00)"> Jumat-Sabtu (16.00-18.00) </option> 
                        <option value="Jumat-Sabtu (19.00-21.00)"> Jumat-Sabtu (19.00-21.00) </option> 
                        <option value="Sabtu-Minggu (08.00-10.00)"> Sabtu-Minggu (08.00-10.00) </option> 
                        <option value="Sabtu-Minggu (14.00-16.00)"> Sabtu-Minggu (14.00-16.00) </option> 
                        <option value="Sabtu-Minggu (16.00-18.00)"> Sabtu-Minggu (16.00-18.00) </option> 

                </select>
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