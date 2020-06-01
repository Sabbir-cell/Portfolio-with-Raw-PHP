<?php





?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">	
</head>
<title></title>
<body>
	<div id="i">
		<form action="insert.php" method="post" enctype="multipart/form-data">
		heading:
		<input type="text" name="heading"><br><br>
		<textarea name="textarea"></textarea><br><br>
		picture:<br>
		<input type="file" name="picture"><br><br>
		caption:<br>
		<input type="text" name="caption"><br><br>
		<button type="submit">submit</button>
		<button type="reset">Reset</button>
		</form>
	</div>

	

</body>
</html>