<?php
include("../inc/connect.php");

$passwordlama = $_POST["passlama"];
$passlama = md5(md5($passwordlama));
$passwordbaru = $_POST["passbaru"];
$passbaru = md5(md5($passwordbaru));
$konfirmasipassword = $_POST["konfirm"];
$username = $_POST["user"];

	$querycek = mysqli_query($conn,"select * from administrators where username = '$username' and password = '$passlama'");
	$count = mysqli_num_rows($querycek);
	echo $count;
	if ($count == 1 && $passwordbaru==$konfirmasipassword){
	$queryupdate = mysqli_query($conn,"update administrators set password = '$passbaru' where username = '$username'");
		if($queryupdate){
			echo "<script>
		alert (' Password Successfully Change');
		eval(\"parent.location='../login.php'\");
		</script>";
		}
	}
	else {
		echo 'error';
	}
?>
