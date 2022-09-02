<?php require_once( 'functions.php' ); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Connecting to a MySQL DatabaseP</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<main>
		<h1>Speakers and Sessions</h1>
		<table>
			<thead>
				<td>Name</td>
				<td>Bio</td>
				<td>Session Title</td>
				<td>Session Desc</td>
				<td>Track</td>
				<td>Edit/Delete</td>
			</thead>
			<tbody>
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

				$results = get_all_speakers($mysqli);

				$format = '<tr>
					<td>%1$s</td>
					<td>%2$s</td>
					<td>%3$s</td>
					<td>%4$s</td>
					<td class="label">%5$s</td>
					<td><a href="edit.php?name=%1$s">Edit</a> | <a href="delete.php?name=%1$s">Delete</a>
				</tr>';
				foreach ($results as $row) {

					printf(
						$format,
						$row['name'],
						$row['bio'],
						$row['session_name'],
						htmlentities($row['session_desc']),
						$row['track']
					);
				}
				?>
			</tbody>
		</table>
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

		table,
		td {
			border: 1px solid #CFCFCF;
			padding: 5px;
		}

		.label {
			color: #FFFFFF;
			background: #880000;
			padding: 5px;
		}
	</style>
</body>

</html>