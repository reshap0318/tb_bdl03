<?php
include ('../inc/connect.php');

$id	= $_POST['id_fasilitas'];
$fasilitas = $_POST['fasilitas'];

$sql  = "update facility set name='$fasilitas' where id=$id";
$insert = mysqli_query($conn,$sql);

if ($insert){
	echo "<script>
		alert (' Data Successfully Change');
		eval(\"parent.location='../?page=fasilitas '\");
		</script>";
}else{
	echo 'error';
}
?>
