<?php
	function check_downtime($url = null) {

	}

	function store_url($url) {

	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Downtime Monitor</title>
        <meta name="author" value="Joe Casabona" />
				<style>
					body {
						background: #EFEFEF;
					}
					main {
						max-width: 800px;
						padding: 20px;
						margin: 0 auto;
						background: #FFFFFF;
						font-size: 1.5rem;
					}

					div {
						margin: 35px;
					}

					input, 
					textarea {
						font-size: 1.5rem;
						padding: 10px;
						width: 95%;
						border: 1px solid #DDDDDD;
					}

					.alert {
						color: #FF0000;
						font-weight: bold;
					}
				</style>
    </head>
    <body>
        <main>
					<h1>Downtime Monitor</h1>
					<form name="downtime" method="POST">
						<input type="url" name="url" placeholder="Enter the URL you want to monitor." />
						<input type="submit" name="submit" value="Submit" />
				</form>
				</main>
    </body>
</html>