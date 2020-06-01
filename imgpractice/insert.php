<?php
$x="localhost";
$y="root";
$z="";
$db="admin";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
	$o=$_POST['heading'];
	$b=$_POST['textarea'];
	//$c=$_POST['picture'];
	$c=$_POST['caption'];
	$dir="upload/";
	$img=$_FILES['picture']['name'];
	$target=$dir.basename($img);
	if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
		$sql="INSERT INTO about(heading,details,picture,caption)VALUES('$o','$b','$img','$c')";
		if ($a->query($sql)===TRUE) {
			echo "insert success";
		}else{
			echo $a->error;
		}
	}else{
		echo "fail";
	}
}
?>