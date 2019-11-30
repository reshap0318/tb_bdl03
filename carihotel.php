<?php

	include('connect.php');
    $latit = $_GET['lat'];
    $longi = $_GET['long'];
		$rad=$_GET['rad'];

		$lt = array();
    $lati = array();
    $long = array();
    $ln = array();

    $id = array();
    $name = array();
    $jarak = array();

		$dataarray=[];
	$querysearch="SELECT id, name, address, cp, ktp, marriage_book, mushalla, star, id_type, ST_X(ST_Centroid(geom)) AS lng, ST_Y(ST_CENTROID(geom)) As lat, st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) as jarak from hotel where st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326), ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) <= $rad";

	$hasil=mysqli_query($conn,$querysearch);

        while($baris = mysqli_fetch_array($hasil))
            {
                $id=$baris['id'];
                $name=$baris['name'];
                $address=$baris['address'];
                $cp=$baris['cp'];
                $ktp=$baris['ktp'];
                $marriage_book=$baris['marriage_book'];
                $mushalla=$baris['mushalla'];
                $star=$baris['star'];
                $id_type=$baris['id_type'];
                $latitude=$baris['lat'];
                $longitude=$baris['lng'];
                $dataarray[]=array('id'=>$id,'name'=>$name,'address'=>$address,'cp'=>$cp, 'ktp'=>$ktp, 'marriage_book'=>$marriage_book, 'mushalla'=>$mushalla, 'star'=>$star, 'id_type'=>$id_type, 'latitude'=>$latitude,'longitude'=>$longitude);
            }
            echo json_encode ($dataarray);
?>
