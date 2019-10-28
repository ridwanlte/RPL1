<?php 

include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = addslashes($_POST['nama']);
$jurusan = addslashes($_POST['jurusan']);
 echo htmlspecialchars($nisn,$nama,$jurusan);
$data = mysqli_query($db, "UPDATE crud SET nama='$nama', jurusan='$jurusan' WHERE nisn='$nisn' ");

header("location:data.php?pesan=ubah");

?>