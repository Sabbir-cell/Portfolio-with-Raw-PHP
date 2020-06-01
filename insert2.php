<?php
$x="localhost";
$y="root";
$z="";
$db="admin";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
	$heading=$_POST['heading'];
	$details=$_POST['textarea'];
	//$picture=$_POST['picture'];
	$caption=$_POST['caption'];

	$dir="upload/";
	$img=$_FILES['picture']['name'];
	$target=$dir.basename($img);
	//echo $_FILES['picture']['tmp_name'];
	//die();
	if (move_uploaded_file($_FILES['picture']['tmp_name'],$target)) {
		//echo $img."upload successful";
		$s="INSERT INTO about(heading,details,picture,caption)VALUES('$heading','$details','$img','$caption')";
		if ($a->query($s)===TRUE) {
			//header("location:dashbord2.php");
			echo "insert successful";
		}else{
			echo $a->error;
		}
	}else{
		echo "pick fail";
	}

	

}


?>