<?php
include('connect.php');
$latit=$_GET["lat"];
$longi=$_GET["lng"];
$rad=$_GET["rad"];
$dataarray=[];
$querysearch="SELECT id, destination,track, route_color, ST_X(ST_Centroid(geom)) AS lng,
ST_Y(ST_CENTROID(geom)) As lat, st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326),
ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) as jarak
from angkot where st_distance_sphere(ST_GeomFromText('POINT($latit $longi)', 4326),
ST_GeomFromText(concat('POINT(',ST_Y(ST_CENTROID(geom)),' ',ST_X(ST_Centroid(geom)),')'), 4326)) <= $rad";
// echo "$querysearch";
$hasil=mysqli_query($conn,$querysearch);
while($row = mysqli_fetch_array($hasil))
{
	  $id=$row['id'];
	  $destination=$row['destination'];
	  $track=$row['track'];
	  $route_color=$row['route_color'];
	  $longitude=$row['lng'];
	  $latitude=$row['lat'];
	  $dataarray[]=array('id'=>$id,'destination'=>$destination, 'track'=>$track, 'route_color'=>$route_color,'longitude'=>$longitude,'latitude'=>$latitude);
}
echo json_encode ($dataarray);
?>
