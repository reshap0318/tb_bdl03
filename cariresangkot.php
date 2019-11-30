
<?php
require 'connect.php';

$cari_nama = $_GET["cari_nama"];
$dataarray=[];

$querysearch	=" 	SELECT distinct a.id,a.name,ST_X(ST_Centroid(a.geom)) AS longitude, ST_Y(ST_CENTROID(a.geom)) As latitude
					FROM restaurant as a where upper(a.name) like upper('%$cari_nama%')
				";

$hasil=mysqli_query($conn,$querysearch);
while($row = mysqli_fetch_array($hasil))
    {
          $id=$row['id'];
          $name=$row['name'];

          $longitude=$row['longitude'];
          $latitude=$row['latitude'];
          $dataarray[]=array('id'=>$id,'name'=>$name, 'longitude'=>$longitude,'latitude'=>$latitude);
    }
echo json_encode ($dataarray);
?>
