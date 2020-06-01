<?php
session_start();
$x="localhost";
$y="root";
$z="";
$db="admin";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
		$username=$_POST['a'];
		$password=$_POST['b'];
		$sql="SELECT * FROM user WHERE username='$username'";//pppppp
		$result=$a->query($sql);
		if ($result->num_rows>0) {
			while ($data=$result->fetch_assoc()) {
					$pw=$data['password'];
				}

				if ($password===$pw) {//ppppppp
					$_SESSION['boltu']="rahim";

					header('Location:dashbord.php');
				}else{
					header('Location:login.php');
				}
			}
			
		else{
			header('Location:login.php');
		}
	
}
?>
