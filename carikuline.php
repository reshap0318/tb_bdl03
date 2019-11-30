<?php

	include('connect.php');
    $latit = $_GET['lat'];
    $longi = $_GET['long'];
		$rad=$_GET['rad'];
		$dataarray=[];

	$querysearch="SELECT id, name, address, cp, capacity, open, close, employee, ST_X(ST_Centroid(geom)) AS lng, ST_Y(ST_CENTROID(geom)) As lat, st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) as jarak from culinary_place where st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) <= $rad";
	$hasil=mysqli_query($conn,$querysearch);

        while($baris = mysqli_fetch_array($hasil))
            {
                $id=$baris['id'];
                $name=$baris['name'];
								$address=$baris['address'];
                $cp=$baris['cp'];
                $capacity=$baris['capacity'];
                $open=$baris['open'];
                $close=$baris['close'];
                $employee=$baris['employee'];
                $latitude=$baris['lat'];
                $longitude=$baris['lng'];
                $dataarray[]=array('id'=>$id,'name'=>$name, 'address'=>$address, 'cp'=>$cp,'capacity'=>$capacity, 'open'=>$open, 'close'=>$close, 'employee'=>$employee, 'latitude'=>$latitude,'longitude'=>$longitude);
            }
            echo json_encode ($dataarray);
?>
