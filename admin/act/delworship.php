<?php
include ('../inc/connect.php');
$id = $_GET['id'];

	$sql   = "delete from worship_place where id='$id'";
	// die(var_dump($sql));

	$delete = mysqli_query($conn,$sql);
	if ($delete){
			echo "<script>
		alert (' Data Successfully Delete');
		eval(\"parent.location='../?page=homeadmin'\");
		</script>";
	}
	else{
		echo 'error';

	}

?>
