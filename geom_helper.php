<?php
  function wkb_to_json($wkb) {
    $geom = geoPHP::load($wkb,'wkb');
    return $geom->out('json');
  }

  $geojson = array(
    'type'      => 'FeatureCollection',
    'features'  => array()
   );
?>
