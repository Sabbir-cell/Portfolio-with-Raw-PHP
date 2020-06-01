<?php
	if(isset($_POST['a'])){
	$x="localhost";
	$y="root";
	$z="";
	$da="admin";	
	$a= new mysqli ($x,$y,$z,$da);
	if ($a->connect_error) 
	{
		echo ("not connect".$a->connect_error);

	}else{
		$username=$_POST['a'];
		$fullname=$_POST['b'];
		$email=$_POST['c'];
		$password=md5($_POST['d']);
		$pic=$_POST['e'];
		$mobile=$_POST['f'];
		$d="INSERT INTO admin(username,fullname,email,password,pic,mobile)VALUES('$username','$fullname','$email','$password','$pic','$mobile')";
		if ($a->query($d)===TRUE) {
			echo "insert success";
			//header("location:show.php");
		}else{
			echo $a->error;
		}
		}
}
?>