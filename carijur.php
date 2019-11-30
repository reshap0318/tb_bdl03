<?php
require 'connect.php';
$jur = $_GET["jur"];
$dataarray=[];
$querysearch	="SELECT id, destination, ST_X(ST_Centroid(geom)) AS lng, ST_Y(ST_CENTROID(geom)) As lat from angkot where id='$jur'";

$hasil=mysqli_query($conn,$querysearch);
while($row = mysqli_fetch_array($hasil))
	{
		  $id=$row['id'];
		  $destination=$row['destination'];
		  $lng=$row['lng'];
		  $lat=$row['lat'];
		  $dataarray[]=array('id'=>$id,'destination'=>$destination,'lng'=>$lng,'lat'=>$lat);
	}
echo json_encode ($dataarray);
?>
