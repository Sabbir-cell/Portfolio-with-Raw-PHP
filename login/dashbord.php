<?php
	session_start();
	if ($_SESSION['boltu']==="rahim") {
		//echo $_SESSION['boltu'];
		//echo "success";
		echo "<a href='logout.php'>logout</a>";
	}else{
		header("location:login.php");
	}





?>