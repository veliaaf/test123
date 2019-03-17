<?php include_once('header.php'); ?>

<style type="text/css">
	.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("kursus/comp.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
</style>


<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2> Halaman Awal </h2>
      <br>
      <p> Selamat Datang di halaman awal Aplikasi Kursus Komputer ini :))</p>
    </div>
  </div>
</section>


<!-- <div class="text-box">

	<h3><p>
		<?php $sql = $conn -> query ("SELECT MAX(id) as maks FROM tb_registrasi");
		while ($hasil=mysql_fetch_row($sql)) {
		$nilai=0;
		$nilai=$hasil['maks'];
		echo $nilai;
}

 ?>
	</p></h3>

</div> -->


<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Kursus Komputer </h1>
    <p>Lets's Join Us</p>
    <!-- <button></button> -->
  </div>
</div>



<?php include_once('footer.php'); ?>
