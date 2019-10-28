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
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data <strong>Berhasil</strong>
          <?php 
          if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "tambah"){
              echo " di tambah.";
            }else if($pesan == "ubah"){
              echo " di ubah.";
            }else if($pesan == "hapus"){
              echo " di hapus.";
            }
          }
          ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <a href="tambah.php" class="btn btn-success">Tambah siswa</a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <form action="data.php" method="POST">
          <div class="input-group">
            <input type="text" class="form-control " placeholder="Silakan cari...." name="cari" id="cari">
            <div class="input-group-append">
            <button class="btn btn-success" type="submit">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <h3>Data Siswa</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NISN</th>
              <th scope="col">Nama</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
              include "koneksi.php";
              if ( isset( $_POST['cari'] ) ) {
              echo " di tambah.";
                $no = 1;
                $cari  = $_POST['cari'];
                $result  = mysqli_query($db, "SELECT * FROM crud WHERE nisn LIKE '%$cari%' OR nama LIKE '%$cari%' ");
                if(mysqli_num_rows($result)>0){
                  while($isi = mysqli_fetch_assoc($result)){ 
          ?>
                    <tr>
                    <th scope="row"><?php echo $no++;?></th>
                      <td><?php echo $isi['nisn']; ?></td>
                      <td><?php echo $isi['nama']; ?></td>
                      <td><?php echo $isi['jurusan']; ?></td>
                      <td>
                <a class="edit badge badge-warning" href="edit.php?nisn=<?php echo $isi['nisn']; ?>">Edit</a> |
                <a class="hapus badge badge-dark" onclick="return confirm('yakin?')" href="hapus.php?nisn=<?php echo $isi['nisn']; ?>">Hapus</a>     
              </td>
                    </tr>
            <?php
                  }
                }
              }
              else {
                $data = mysqli_query($db,"select * from crud");
                $no = 1;
                while($isi = mysqli_fetch_array($data)){
          ?>
            <tr>
            <th scope="row"><?php echo $no++;?></th>
                <td><?php echo $isi['nisn']; ?></td>
                <td><?php echo $isi['nama']; ?></td>
                <td><?php echo $isi['jurusan']; ?></td>
                <td>
                <a class="edit badge badge-warning" href="edit.php?nisn=<?php echo $isi['nisn']; ?>">Edit</a> |
                <a class="hapus badge badge-dark" onclick="return confirm('yakin?')" href="hapus.php?nisn=<?php echo $isi['nisn']; ?>">Hapus</a>     
              </td>
          <?php } }?>
          </tbody>
        </table>
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