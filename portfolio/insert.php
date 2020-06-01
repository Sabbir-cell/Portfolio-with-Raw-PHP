<?php
$x="localhost";
$y="root";
$z="";
$db="admin";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
	$p=$_POST['b'];
	$i=$_POST['c'];
	$dir="upload/";
	$img=$_FILES['picture']['name'];
	$target=$dir.basename($img);

	if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)){
	$sql="INSERT INTO port(picture,caption,deatils)VALUES('$p','$i','$img')";
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