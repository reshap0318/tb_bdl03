<?php
require 'connect.php';

$kecamatan_id=$_GET['kecamatan'];
$data=[];
$querysearch = mysqli_query($conn,"SELECT
	rm.gid,
	rm.nama_kulin,
	rm.geom,
	st_x(st_centroid(rm.geom)) as longitude,
	st_y(st_centroid(rm.geom)) as latitude
	from rm, kecamatan
	WHERE st_contains(kecamatan.geom, rm.geom) and kecamatan.id='$kecamatan_id'");

while ($row=mysqli_fetch_array($querysearch))
$data[]=$row;
echo $_GET['jsoncallback'].''.json_encode($data).'';
?>
