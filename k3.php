<?php

  include 'connect.php';

  $kode = '';
  $query = false;
  $sql = "";
  $nsql = "";
  $dataarray = [];
  if(isset($_GET['kode'])){
    $kode = $_GET['kode'];
  }

  if(isset($_GET['query'])){
    $query = $_GET['query'];
  }
  //astri
  if( $kode=='f1' && isset($_GET['kategori']) && isset($_GET['ustad_name']) ){
    $kategori = $_GET['kategori'];
    $ustad_name = $_GET['ustad_name'];

    $sql = "select distinct worship_place.id, worship_place.name, ST_X(ST_Centroid(worship_place.geom)) AS longitude, ST_Y(ST_CENTROID(worship_place.geom)) As latitude, 'wp' as cat
    FROM worship_place
    left join detail_event on worship_place.id=detail_event.id_worship_place
    left join event on event.id=detail_event.id_event
    left JOIN ustad on ustad.id=detail_event.id_ustad
    left join category_worship_place on category_worship_place.id=worship_place.id_category
    where category_worship_place.id = $kategori and ustad.name like '%$ustad_name%'";

  }
  //astri
  else if( $kode=='f2' && isset($_GET['angkot']) ){
      $angkot = $_GET['angkot'];

      $sql = "select distinct id, name, capacity,address,ST_X(ST_Centroid(geom)) AS longitude,
      ST_Y(ST_CENTROID(geom)) As latitude, 'wp' as cat from worship_place
      join detail_worship_place on worship_place.id = detail_worship_place.id_worship_place
      where detail_worship_place.id_angkot = '$angkot'
      union
      select distinct id, name, 0 as capacity,
      address,ST_X(ST_Centroid(geom)) AS longitude, ST_Y(ST_CENTROID(geom)) As latitude ,
      'si' as cat from small_industry
      join detail_small_industry on small_industry.id = detail_small_industry.id_small_industry
      where detail_small_industry.id_angkot = '$angkot'
      union
      select distinct id, name, 0 as capacity,address,ST_X(ST_Centroid(geom)) AS longitude,
      ST_Y(ST_CENTROID(geom)) As latitude , 's' as cat from souvenir
      join detail_souvenir on souvenir.id = detail_souvenir.id_souvenir
      where detail_souvenir.id_angkot = '$angkot'";
  }
  //me
  else if( $kode=='f3' && isset($_GET['event']) && isset($_GET['fasilitas']) ){
    $fasilitas = $_GET['fasilitas'];
    $event = $_GET['event'];

    $sql = "select distinct a.id, a.name, a.address, a.capacity,ST_X(ST_Centroid(a.geom)) AS longitude, ST_Y(ST_CENTROID(a.geom)) As latitude, 'wp' as cat
            FROM worship_place as a
            join detail_facility on a.id = detail_facility.id_worship_place
            join facility on detail_facility.id_facility = facility.id
            join detail_event on detail_event.id_worship_place = a.id
            join event on detail_event.id_event = event.id
            where event.name like '%$event%'
            and facility.id in ($fasilitas)";
  }
  else if( $kode=='f4' && isset($_GET['angkot']) && isset($_GET['hotel_type'])  && isset($_GET['rad']) ){
      $angkot = $_GET['angkot'];
      $hotel_type = $_GET['hotel_type'];
      $rad = $_GET['rad'];

      $sql = "select distinct worship_place.id, worship_place.name, st_x(st_centroid(worship_place.geom)) as longitude,st_y(st_centroid(worship_place.geom)) as latitude, 'wp' as cat from worship_place
            join hotel on ST_DistanceSphere(worship_place.geom, hotel.geom) < $rad
            join hotel_type on hotel.id_type = hotel_type.id
            join detail_hotel on hotel.id = detail_hotel.id_hotel
            join detail_worship_place on worship_place.id = detail_worship_place.id_worship_place
            join angkot on detail_worship_place.id_angkot = angkot.id
            where angkot.id = '$angkot'
            and hotel_type.id = '$hotel_type'
            union
            select distinct hotel.id, hotel.name, st_x(st_centroid(hotel.geom)) as longitude,st_y(st_centroid(hotel.geom)) as latitude, 'h' as cat from hotel
            join detail_hotel on hotel.id = detail_hotel.id_hotel
            join angkot on detail_hotel.id_angkot = angkot.id
            join hotel_type on hotel.id_type = hotel_type.id
            where angkot.id = '$angkot'
            and hotel_type.id = '$hotel_type'";
  }
  else if( $kode=='f5' && isset($_GET['kategori']) && isset($_GET['ustad_name']) ){
      $kategori = $_GET['kategori'];
      $ustad_name = $_GET['ustad_name'];

      $sql = "";
  }



  if($query){
    die($sql);
  }

  if($sql != ''){
    $eks = pg_query($sql);
    while($row = pg_fetch_array($eks))
    {
      $id=$row['id'];
      $name=$row['name'];
      $longitude=$row['longitude'];
      $latitude=$row['latitude'];
      $cat = $row['cat'];
      $dataarray[]=array('id'=>$id,'name'=>$name, 'longitude'=>$longitude,'latitude'=>$latitude, 'cat'=>$cat);
    }
  }
  echo json_encode ($dataarray);

?>
