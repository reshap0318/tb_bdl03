<?php
include ('../inc/connect.php');
$id = $_GET['id_worship_place'];
$date = $_GET['date'];
$time = $_GET['time'];
	$sql   = "delete from detail_event where id_worship_place='$id' and date='$date' and time='$time'";
	echo "$sql";
	$delete = mysqli_query($conn,$sql);
	if ($delete){
			echo "<script>
		alert (' Data Has Been Delete');
		eval(\"parent.location='../index1.php?page=listevent'\");
		</script>";
	}
	else{
		echo 'error';

	}

?>
