<?php include_once('header.php'); ?>
<?php 

//ambil data di url
$id = $_GET["id"];

//query data pengajar berdasar id
$hariwaktu = query("SELECT * FROM tb_hari WHERE id = $id")[0];

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  //cek data berhasil diedit
  if( edit3($_POST) > 0 ){
    echo "
      <script>
      alert('data berhasil diedit');
      document.location.href = 'listhari.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal diedit');
      document.location.href = 'listhari.php';
      </script>
    ";
  }

}

 ?>
      <h1>
        Edit Data Hari & Waktu
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
              <input type="hidden" name="id" value="<?= $hariwaktu["id"]; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Hari dan Waktu</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="hari" placeholder="Hari Kursus" value="<?= $hariwaktu["hari"]; ?>">
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