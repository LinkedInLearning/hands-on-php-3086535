<?php
	function validate_form() {
		if ( isset( $_POST['submit'] ) ) {
			$num = (int)$_POST['number'];
			if ( is_int($num) && $num > 0 ) {
				echo '<h3>Great job! You submitted a positive integer!</h3>';
			} else {
				echo '<h3>ERROR! You did not submit a positive integer.</h3>';
			}
		}

		return true;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Validate Form</title>
		<meta name="author" value="Joe Casabona" />
	</head>
	<body>
		<main>
			<?php validate_form();	?>
			<form name="submit_number" method="POST">
				<div>
					<label for="name">Submit a Positive Integer:</label>
					<input type="text" name="number" />
				</div>
				<div><input type="submit" name="submit" value="Submit Number" /></div>
			</form>	
		</main>
	</body>
</html>