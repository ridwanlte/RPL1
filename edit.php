<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Siswa</title>
  </head>
  <body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">
      	<div class="card">
      		<div class="card-header">
      			Edit Data
      		</div>
      		<div class="card-body">
      			<form action="ubah.php" method="POST">
              <?php 
              include 'koneksi.php';
              $nisn = $_GET['nisn'];
              $data = mysqli_query($db, "SELECT * FROM crud WHERE nisn='$nisn'")or die(mysqli_error());
              $no = 1;
              while ($isi = mysqli_fetch_array($data)){
              ?>
      				<label class="mr-3">NISN</label>
      				<input type="text" name="nisn" id="nisn" value="<?php echo $isi['nisn']; ?>"><br>
      				<label class="mr-2">Nama</label>
      				<input type="text" name="nama" id="nama" value="<?php echo $isi['nama']; ?>"><br>
      				<label>Jurusan</label>
      				<input type="text" name="jurusan" id="jurusan" value="<?php echo $isi['jurusan']; ?>"><br>
      	       <button type="submit" name="ubah" class="btn btn-success float-right" onclick="return confirm('simpan perubahan?')">Ubah</button>
              <?php } ?>
      			</form>
      		</div>
      	</div>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>