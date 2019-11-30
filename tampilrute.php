<?php

require 'connect.php';
require 'geom_helper.php';

$id_angkot = $_GET['id_angkot'];
$load=[];
// $sql = "SELECT row_to_json(fc) FROM (SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features FROM (SELECT 'Feature' As type, ST_AsGeoJSON(a.geom)::json As geometry, row_to_json((SELECT l FROM(SELECT a.id, a.destination, a.track, a.route_color, ST_X(ST_Centroid(a.geom)) As longitude, ST_Y(ST_CENTROID(a.geom)) As latitude) As l)) As properties FROM angkot As a where a.id='$id_angkot') As f) As fc";
$sql = "select *, ST_ASWKB(geom) AS wkb from angkot where angkot.id='$id_angkot'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	$properties = $row;
	# Remove wkb and geometry fields from properties
	unset($properties['wkb']);
	unset($properties['geom']);
	$feature = array(
		 'type' => 'Feature',
		 'geometry' => json_decode(wkb_to_json($row['wkb'])),
		 'properties' => $properties
	);
	# Add feature arrays to feature collection array
	array_push($geojson['features'], $feature);
}

//  print_r($geojson);

echo(json_encode($geojson));
 ?>
