<!DOCTYPE html>
<html>

<head>
	<title>Delete Speaker</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<?php

	$host = '127.0.01';
	$user = 'mariadb';
	$pass = 'mariadb';
	$db = 'mariadb';

	$mysqli = new mysqli(
		$host,
		$user,
		$pass,
		$db
	);
	
	?>
	<p><a href="index.php">Go Back</a></p>
</body>

</html>