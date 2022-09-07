<?php require_once( 'functions.php' ); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Delete Speaker</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<?php
	$result = delete_speaker($_GET['id'], $mysqli);

	if ($result) {
		echo '<h1> Speaker successfully deleted.</h1>';
	} else {
		echo '<h1>There was an issue.</h1>';
	}
	?>
	<p><a href="index.php">Go Back</a></p>
</body>

</html>