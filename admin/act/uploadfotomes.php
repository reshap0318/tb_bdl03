<?php
	include ('../inc/connect.php');
	$id = $_POST['id'];
	$querysearch="select serial_number from worship_place_gallery where id='$id' order by serial_number desc limit 1";


	 $hasil=mysqli_query($conn,$querysearch);
	 $serial_number = 1;
	 while($baris = mysqli_fetch_array($hasil))
	 {
	 	$angka = $baris['serial_number'] + 1;
	 	$serial_number = $angka;
	 }

	$jenis_gambar=$_FILES['image']['type'];
	if(($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif"  || $jenis_gambar=="image/png") && ($_FILES["image"]["size"] <= 5000000)){
		$sourcename=$_FILES["image"]["name"];
		$name=$sourcename;
		$filepath="../../foto/".$name;
		move_uploaded_file($_FILES["image"]["tmp_name"],$filepath);
		$sql = mysqli_query($conn,"insert into worship_place_gallery values('$serial_number','$id','$name')");
		if($sql){
			header("location:../index1.php?page=detail&id=$id");
		}
	}

	else{
		echo "The Picture Isn't Valid!<br>";
		echo "Go Back To <a href='../index1.php?page=detail&id=$id'></a>";
	}
?>
