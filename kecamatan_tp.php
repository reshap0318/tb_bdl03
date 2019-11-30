<?php
require 'connect.php';

$kecamatan_id=$_GET['kecamatan'];
$data=[];
$querysearch = mysqli_query($conn,"SELECT
	worship_place.id,
	worship_place.name,
	-- worship_place.geom,
	st_x(st_centroid(worship_place.geom)) as longitude,
	st_y(st_centroid(worship_place.geom)) as latitude
	from worship_place, district
	WHERE st_contains(district.geom, worship_place.geom) and district.id='$kecamatan_id'");

while ($row=mysqli_fetch_array($querysearch))
$data[]=$row;
echo json_encode($data).'';
?>
