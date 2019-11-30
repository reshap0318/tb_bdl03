<?php
include ('../inc/connect.php');
session_start();
// $id_detail_keg = $_POST['id_detail_keg'];
$keg = $_POST['keg'];
$jam = $_POST['jam'];
$jam = date("H:i", strtotime("$jam"));
$tgl = DateTime::createFromFormat('m-d-Y', $_POST['tgl'])->format('Y-m-d');
$id = $_SESSION['id'];
$ustad = $_POST['ustad'];
$penyelenggara = $_POST['penyelenggara'];
$sql = mysqli_query($conn,"insert into detail_event values ('$tgl','$jam','$id','$ustad','$keg', '$penyelenggara')");
echo "insert into detail_event values ('$tgl','$jam', '$ustad','$keg','$id', '$penyelenggara')<br>";
if ($sql){
	echo "<script>
		alert ('Data Successfully Added');
		eval(\"parent.location='../index1.php?page=listevent '\");
		</script>";
}else{
	echo 'error';
}
?>
