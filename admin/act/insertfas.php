<?php
include ('../inc/connect.php');

$query = mysqli_query($conn,"SELECT MAX(id) AS id FROM facility");
$result = mysqli_fetch_array($query);
$idmax = $result['id'];
if ($idmax==null) {$idmax=1;}
else {$idmax++;}
$fasilitas = $_POST['fasilitas'];

$count = count($fasilitas);
$sql  = "insert into facility (id, name) VALUES ";

for( $i=0; $i < $count; $i++ ){
	$sql .= "('{$idmax}','{$fasilitas[$i]}')";
	$sql .= ",";
	$idmax++;
}
$sql = rtrim($sql,",");
$insert = mysqli_query($conn,$sql);

if ($sql){
		echo "<script>
		alert (' Data Successfully Added');
		eval(\"parent.location='../index.php?page=fasilitas '\");
		</script>";
}else{
	echo 'error';
}


?>
