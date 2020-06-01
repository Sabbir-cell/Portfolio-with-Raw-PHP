<?php
$x="localhost";
$y="root";
$z="";
$db="admin";
$a= new mysqli($x,$y,$z,$db);
if ($a->connect_error) {
	echo ("not connect.$a->connect_error");
}else{
	$q=$_POST['x'];
	$p=$_POST['b'];
	$i=$_POST['c'];
	$u=$_POST['d'];
	$sql="INSERT INTO alt(graphicdesign,html,css,wordpress)VALUES('$q','$p','$i','$u')";
	if ($a->query($sql)===TRUE) {
		header('location:form.php');
	}else{
		echo $a->error;
	}

}
?>