<?php

include 'koneksi.php';
$nisn = $_GET['nisn'];
$data = mysqli_query($db, "DELETE FROM crud WHERE nisn='$nisn'")or die(mysqli_error());
 
header("location:data.php?pesan=hapus");
?>