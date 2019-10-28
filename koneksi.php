<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "crud";

$db = mysqli_connect( $host, $user, $password, $database );

// jika tidak konek
if ( ! $db ) {
	die( "Tidak terkoneksi database" );
}
?>