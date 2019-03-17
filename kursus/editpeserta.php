<?php include_once('header.php'); ?>
<?php 



//ambil data di url
$id = $_GET["id"];

//query data pengajar berdasar id
$peserta = query("SELECT * FROM tb_registrasi WHERE id = $id")[0];

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  //cek data berhasil diedit
  if( edit2($_POST) > 0 ){
    echo "
      <script>
      alert('data berhasil diedit');
      document.location.href = 'listpeserta.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal diedit');
      document.location.href = 'listpeserta.php';
      </script>
    ";
  }

  }

 ?>
    
      <h1>
        Edit Data Peserta
      </h1>
      
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $peserta["id"]; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required value="<?= $peserta["nama"]; ?>">
                </div>
                <div class="form-group">
                  <label for="jk" >Jenis Kelamin</label> <br>
                  <input type="radio" class="form" name="jk" value="laki-laki">laki-laki<br>
                  <input type="radio" class="form" name="jk" value="perempuan">perempuan<br>

                </div>
                 <div class="form-group">
                  <label for="tanggal">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" name="ttl" placeholder="Tanggal Lahir" required value="<?= $peserta["ttl"]; ?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Alamat" required value="<?= $peserta["alamat"]; ?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Nomor HP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nohp" placeholder="Nomor HP" required value="<?= $peserta["nohp"]; ?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="E-mail" required value="<?= $peserta["email"]; ?>">
                </div>
               <div class="form-group">
                  <label for="jenis_kursus">Jenis Kursus</label> <p><i>*pilih salah satu</i></p>
                  <input type="radio" class="form" name="jenis_kursus" value="Pemrograman">Pemrograman<br>
                  <input type="radio" class="form" name="jenis_kursus" value="Web Design">Web Design <br>
                  <input type="radio" class="form" name="jenis_kursus" value="Desain Grafis">Desain Grafis<br>


                </div>
                <div class="form-group">
                  <label for="hari">Hari & Waktu</label> <p><i>*pilih salah satu</i></p>
                  <input type="radio" class="form" name="hari" value="Jumat-Sabtu (16.00-18.00)">Jumat-Sabtu (16.00-18.00)<br>
                  <input type="radio" class="form" name="hari" value="Jumat-Sabtu (19.00-21.00)">Jumat-Sabtu (19.00-21.00) <br>
                  <input type="radio" class="form" name="hari" value="Sabtu-Minggu (08.00-10.00)">Sabtu-Minggu (08.00-10.00)<br>
                  <input type="radio" class="form" name="hari" value="Sabtu-Minggu (14.00-16.00)">Sabtu-Minggu (14.00-16.00) <br>
                  <input type="radio" class="form" name="hari" value="Sabtu-Minggu (16.00-18.00)">Sabtu-Minggu (16.00-18.00)<br>
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