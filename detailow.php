<?php
require 'connect.php';

$cari = $_GET["cari"];
$querysearch	= "select id, name, address, open, close, ticket,ST_X(ST_Centroid(geom)) AS longitude, ST_Y(ST_CENTROID(geom)) As latitude from tourism where id='$cari'";
$dataarray=[];
$hasil=mysqli_query($conn,$querysearch);
while($row = mysqli_fetch_array($hasil))
    {
          $id=$row['id'];
          $name=$row['name'];
          $address=$row['address'];
		  $open=$row['open'];
		  $close=$row['close'];
          $longitude=$row['longitude'];
          $latitude=$row['latitude'];
          $dataarray[]=array('id'=>$id,'name'=>$name, 'address'=>$address,'open'=>$open, 'close'=>$close, 'ticket'=>'','longitude'=>$longitude,'latitude'=>$latitude);
    }
echo json_encode ($dataarray);
?>
