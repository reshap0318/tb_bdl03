<?php

	include('connect.php');
    $latit = $_GET['lat'];
    $longi = $_GET['long'];
		$rad=$_GET['rad'];
		$dataarray=[];

	$querysearch="SELECT id, name, address, cp, open, close, capacity, employee, mushalla, park_area, bathroom, id_category, ST_X(ST_Centroid(geom)) AS lng, ST_Y(ST_CENTROID(geom)) As lat, st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) as jarak from restaurant where st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) <= $rad";
	$hasil=mysqli_query($conn,$querysearch);

        while($baris = mysqli_fetch_array($hasil))
            {
                $id=$baris['id'];
                $name=$baris['name'];
                $address=$baris['address'];
                $cp=$baris['cp'];
                $open=$baris['open'];
                $close=$baris['close'];
                $capacity=$baris['capacity'];
                $employee=$baris['employee'];
                $mushalla=$baris['mushalla'];
                $park_area=$baris['park_area'];
                $bathroom=$baris['bathroom'];
                $latitude=$baris['lat'];
                $longitude=$baris['lng'];
                $dataarray[]=array('id'=>$id,'name'=>$name,'address'=>$address,'cp'=>$cp, 'open'=>$open, 'close'=>$close,'capacity'=>$capacity, 'employee'=>$employee, 'mushalla'=>$mushalla,'park_area'=>$park_area, 'bathroom'=>$bathroom, "latitude"=>$latitude,"longitude"=>$longitude);
            }
            echo json_encode ($dataarray);
?>
