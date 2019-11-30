<?php
include ('../inc/connect.php');
$id = $_POST['id'];
$kegiatan = $_POST['kegiatan'];
	$countl = count($kegiatan);
	$sqll   = "insert into detail_event (id_worship_place, id_fasilitas) VALUES ";

	for( $i=0; $i < $countl; $i++ ){
		$sqll .= "('{$id}','{$kegiatan[$i]}')";
		$sqll .= ",";
	}
	$sqll = rtrim($sqll,",");
	$insert2 = mysqli_query($conn,$sqll);
	if ($insert2){
		header("location:../index1.php?page=content&id=$id");
	}
	else{
		echo 'error';
		header("location:../?page=content&id=$id");
	}

?>
