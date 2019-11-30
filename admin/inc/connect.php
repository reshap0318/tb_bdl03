<?php
	// require_once($_SERVER['DOCUMENT_ROOT'].'/t2-eng-mysql/assets/geoPHP/geoPHP.inc');
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$port = "3306";
	$dbname = "bkt_tourism";

	$conn = mysqli_connect("$host","$user","$pass","$dbname");
	// Check connection
	if (mysqli_connect_errno()){
		die("Koneksi database gagal : " . mysqli_connect_error());
	}
?>
