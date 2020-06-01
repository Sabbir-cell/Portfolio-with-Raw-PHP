<?php
$x="localhost";
$y="root";
$z="";
$db="admin";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$_POST['d'];
	$dir="upload/";
	$img=$_FILES['picture']['name'];
	$target=$dir.basename($img);
	if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
		$sql="INSERT INTO education(heading,deatils,img,caption)VALUES('$x','$y','$img','$z')";
		if ($a->query($sql)===TRUE) {
			header('location:form.php');
		}else{
			echo $a->error;
		}
	}else{
		echo "fail";
	}
}
?>