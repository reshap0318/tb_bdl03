<?php
    include("connect.php");
    $dataarray = [];
    $result=  mysqli_query($conn,"select * from industri_kecil order by id_industri ASC");
        while($baris = mysqli_fetch_array($result))
            {
                $id_industri=$baris['id_industri'];
                $nama_industri=$baris['nama_industri'];
                $dataarray[]=array('id_industri'=>$id_industri,'nama_industri'=>$nama_industri);
            }
            echo json_encode ($dataarray);
?>
