<?php
    include ('../inc/connect.php');
    $result=  mysqli_query($conn,"select * from worship_place where username='A' ");
        while($baris = mysqli_fetch_array($result))
            {
                $id=$baris['id'];
                $nama=$baris['name'];
                $dataarray[]=array('id'=>$id,'name'=>$nama);
            }
            echo json_encode ($dataarray);
?>
