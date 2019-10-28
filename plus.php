<?php 
 
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = addslashes($_POST['nama']);
$jurusan = addslashes($_POST['jurusan']);
 
$data= mysqli_query($db, "INSERT INTO crud VALUES('$nisn','$nama','$jurusan')");
 echo htmlspecialchars($nisn,$nama,$jurusan);
header("location:data.php?pesan=tambah");
?>