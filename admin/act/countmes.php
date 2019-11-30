<?php
include ('inc/connect.php');

		$sql = "select(select count(*) from worship_place where id_category=1) as masjid,
		(select count(*) from worship_place where id_category=2) as mushalla
				";
				$query = mysqli_query($conn,$sql);

		if(mysqli_num_rows($query)>0){
			$data = mysqli_fetch_assoc($query);
			return $data;
		}









 ?>
