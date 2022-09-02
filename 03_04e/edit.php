<?php

function update_record($mysqli)
{
	extract($_POST);
	$bio = filter_var($bio, FILTER_SANITIZE_ADD_SLASHES);
	$desc = filter_var($_POST['desc'], FILTER_SANITIZE_ADD_SLASHES);

	$query = "UPDATE speakers SET name='$name', bio='$bio',	session_name='$session_name', session_desc='$desc' WHERE name='$name';";

	return $mysqli->query($query);
}

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

<!DOCTYPE html>
<html>

<head>
	<title>Edit Record</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<main>
		<?php
		if (isset($_POST['submit'])) {
			$result = update_record($mysqli);
			if ($result) echo '<p>Record successfully updated.</p>';
		}
		?>
		<h1>Edit <?php echo $_GET['name']; ?></h1>
		<?php
		$name = $_GET['name'];

		$results = $mysqli->query('SELECT * FROM speakers WHERE name="' . $name . '";');

		foreach ($results as $row) :
		?>

			<form name="edit_speaker" method="POST">
				<div>
					<label for="name">Name:</label>
					<input type="text" name="name" value="<?php echo $row['name']; ?>" />
				</div>
				<div>
					<label for="bio">Bio:</label>
					<textarea name="bio"><?php echo $row['bio']; ?></textarea>
				</div>
				<div>
					<label for="session_name">Session Name:</label>
					<input type="text" name="session_name" value="<?php echo $row['session_name']; ?>" />
				</div>
				<div>
					<label for="desc">Session Description:</label>
					<textarea name="desc"><?php echo $row['session_desc']; ?></textarea>
				</div>
				<input type="submit" name="submit" value="Edit Speaker" />
			</form>

		<?php endforeach; ?>
	</main>
	<style>
		body {
			background: #edf2f8;
			font-family: 'Inter', sans-serf;
			font-size: 18px;
		}

		main {
			background: #FFFFFF;
			padding: 40px;
			margin: 0 auto;
			width: 1000px;
		}

		div {
			margin: 35px;
		}

		input,
		textarea {
			font-size: 1.25rem;
			padding: 5px;
			width: 95%;
			border: 1px solid #DDDDDD;
		}
	</style>
</body>

</html>