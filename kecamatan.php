<?php
require 'connect.php';
require 'geom_helper.php';

$sql = "select *, ST_ASWKB(geom) AS wkb from district";
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
