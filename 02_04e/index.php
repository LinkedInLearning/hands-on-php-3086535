<?php 
	function get_visitors() {
		return file_get_contents('visits.txt');
	}

	function log_visit() {
		$visits = (int)file_get_contents('visits.txt');
		$visits++;
		file_put_contents('visits.txt', $visits);
	}

	if ( ! isset( $_COOKIE['visited'] ) ) {
		setcookie( 'visited', true, time()+(86400 * 30)); // 86400 is 1 day in seconds
		log_visit();
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to My Website</title>
        <meta name="author" value="Joe Casabona" />
    </head>
    <body>
        <h1>Welcome to My Website</h1>
				<p>There have been <b><?php echo get_visitors(); ?></b> visitors so far.</p>
    </body>
</html>