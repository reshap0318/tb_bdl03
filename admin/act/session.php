<?php
include ('../inc/connect.php');
session_start();
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$pass = md5(md5($password));
	//$pass=$password;
	$sql = mysqli_query($conn,"SELECT * FROM administrators WHERE upper(username)=upper('$username') and password='$pass'");
	$num = mysqli_num_rows($sql);
	$dt = mysqli_fetch_array($sql);
	if($num==1){
		$_SESSION['username'] = $username;

		if($dt['role']=='A'){

			$_SESSION['A'] = true;
			?><script language="JavaScript">document.location='../'</script><?php
			echo "<script>
		alert (' hyyy');
		</script>";
		}

		if($dt['role']=='P'){
			$id = $dt['id_worship_place'];
			echo "$id";
			$sql=mysqli_query($conn,"select max(stewardship_period) as max from administrators where id_worship_place='$id'");

			$dt2=mysqli_fetch_assoc($sql);
			if($dt['stewardship_period']!=$dt2['max'])
			{
			echo "<script>
			alert (' Your Period is Expired !');
			eval(\"parent.location='../login.php '\");
			</script>";
			}
			$_SESSION['P'] = true;
			$_SESSION['username']=$dt['username'];
			$_SESSION['id_worship_place']=$dt['id_worship_place'];
			$_SESSION['name']=$dt['name'];
			$query=mysqli_query($conn,"select * from worship_place where id='$dt[id_worship_place]'");
			$data=mysqli_fetch_assoc($query);
			$_SESSION['id']=$data['id'];
			?><script language="JavaScript">document.location='../index1.php'</script><?php
		}
		$result = mysqli_query($conn,"update administrators set last_login = now() where username='$username'");
	}else{
		echo "<script>
		alert (' Login Failed, Please Fill Your Username and Password Correctly !');
		eval(\"parent.location='../login.php '\");
		</script>";
	}
}
?>
