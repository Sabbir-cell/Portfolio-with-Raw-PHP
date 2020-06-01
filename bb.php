<?php
$xx="localhost";
$yy="root";
$zz="";
$db="cisir";
$mm= new mysqli($xx,$yy,$zz,$db);
if ($a->connect_error) {
	echo ("not connect.$mm->connect_error");
}


?>