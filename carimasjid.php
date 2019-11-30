
<?php
require 'connect.php';

$cari_nama = "";
if(isset($_GET["cari_nama"])){
	$cari_nama = $_GET["cari_nama"];
}

$dataarray=[];

$querysearch	=" 	SELECT distinct a.id,a.name,a.address, a.capacity,ST_X(ST_Centroid(a.geom)) AS longitude, ST_Y(ST_CENTROID(a.geom)) As latitude
					FROM worship_place as a where upper(a.name) like upper('%$cari_nama%')
				";

$hasil=mysqli_query($conn,$querysearch);
while($row = mysqli_fetch_array($hasil))
    {
          $id=$row['id'];
          $name=$row['name'];
          $address=$row['address'];
          $capacity=$row['capacity'];
          $longitude=$row['longitude'];
          $latitude=$row['latitude'];
          $dataarray[]=array('id'=>$id,'name'=>$name, 'address'=>$address, 'capacity'=>$capacity, 'longitude'=>$longitude,'latitude'=>$latitude);
    }
echo json_encode ($dataarray);
?>
