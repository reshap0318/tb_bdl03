<?php

	include('connect.php');
    $latit = $_GET['lat'];
    $longi = $_GET['long'];
		$rad=$_GET['rad'];
		$dataarray=[];

	$querysearch="SELECT id, name, address, land_size, building_size, park_area_size, capacity, est, last_renovation, imam, jamaah, teenager, ST_X(ST_Centroid(geom)) AS lng, ST_Y(ST_CENTROID(geom)) As lat, st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) as jarak from worship_place where st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) <= $rad";

	$hasil=mysqli_query($conn,$querysearch);

        while($baris = mysqli_fetch_array($hasil))
            {
                $id=$baris['id'];
                $name=$baris['name'];
                $address=$baris['address'];
                $land_size=$baris['land_size'];
		  $building_size=$baris['building_size'];
		  $park_area_size=$baris['park_area_size'];
		  $capacity=$baris['capacity'];
		  $est=$baris['est'];
		  $last_renovation=$baris['last_renovation'];
		  $imam=$baris['imam'];
		  $jamaah=$baris['jamaah'];
		  $teenager=$baris['teenager'];
                $latitude=$baris['lat'];
                $longitude=$baris['lng'];
                $dataarray[]=array('id'=>$id,'name'=>$name,'address'=>$address, "latitude"=>$latitude,"longitude"=>$longitude);
            }
            echo json_encode ($dataarray);
?>
