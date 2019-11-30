<?php
    include("connect.php");
    $result=  mysqli_query($conn,"select * from objek_wisata order by id_wisata ASC");
    $dataarray = [];
        while($baris = mysqli_fetch_array($result))
            {
                $id_wisata=$baris['id_wisata'];
                $nama_wisata=$baris['nama_wisata'];
                $dataarray[]=array('id_wisata'=>$id_wisata,'nama_wisata'=>$nama_wisata);
            }
            echo json_encode ($dataarray);
?>
