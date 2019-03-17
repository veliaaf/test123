<?php include_once('header.php'); ?>
<?php 



//ambil data di url
$id = $_GET["id"];

//query data pengajar berdasar id
$jadwal = query("SELECT * FROM tb_jadwal WHERE id = $id")[0];

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  //cek data berhasil diedit
  if( edit4($_POST) > 0 ){
    echo "
      <script>
      alert('data berhasil diedit');
      document.location.href = 'listjadwal.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal diedit');
      document.location.href = 'listjadwal.php';
      </script>
    ";
  }

  }

 ?>
    
      <h1>
        Edit Data Jadwal
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
                  <label for="nama_pengajar">Nama Pengajar</label> <p><i>*pilih salah satu</i></p>
                  <?php 
                      $nama_pengajar = $jadwal['nama_pengajar'];
                      $nama_pengajar_array = explode(",",$nama_pengajar);
                   ?>
                  <input type="checkbox" class="form" id="exampleInputPassword1" name="nama_pengajar[]" alt="checkbox" value="Adelia Adora" <?php if (in_array('Adelia Adora',$nama_pengajar_array)){echo 'checked';} ?>>Adelia Adora <br>
                  <input type="checkbox" class="form" id="exampleInputPassword1" name="nama_pengajar[]" alt="checkbox" value="Rangga Aditya" <?php if (in_array('Rangga Aditya',$nama_pengajar_array)){echo 'checked';} ?>>Rangga Aditya <br>
                  <input type="checkbox" class="form" id="exampleInputPassword1" name="nama_pengajar[]" alt="checkbox" value="Thariq Hazim" <?php if (in_array('Thariq Hazim',$nama_pengajar_array)){echo 'checked';} ?>>Thariq Hazim <br>
                  <input type="checkbox" class="form" id="exampleInputPassword1" name="nama_pengajar[]" alt="checkbox" value="Gian Ardhani" <?php if (in_array('Gian Ardhani',$nama_pengajar_array)){echo 'checked';} ?>>Gian Ardhani <br>
                  <input type="checkbox" class="form" id="exampleInputPassword1" name="nama_pengajar[]" alt="checkbox" value="Alesha Zahra" <?php if (in_array('Alesha Zahra',$nama_pengajar_array)){echo 'checked';} ?>>Alesha Zahra <br>
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