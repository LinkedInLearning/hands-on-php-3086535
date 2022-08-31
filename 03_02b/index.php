<?php
  function print_array( $output ) {
    echo '<pre>';
    print_r( $output );
    echo '</pre>';
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Retrieving information from an API</title>
        <meta name="author" value="Joe Casabona" />
    </head>
    <body>
		<main>
  			<h1>Recent Images</h1>
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
				width: 800px;
			}

			figure {
				background: #333333;
				padding: 10px;
				margin: 15px auto;
				max-width: 95%;
			}

			figure img {
				max-width: 100%;
				height: auto;
			}

			figcaption {
				color: #FFFFFF;
				text-align: center;
			}

			form {
				margin: 25px;
			}

			form input {
				width: 100%;
				padding: 5px;
				font-size: 20px;
			}
		</style>
    </body>
</html>