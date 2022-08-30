<?php
function print_array($a) {
	echo '<pre>';
	var_dump( $a );
	echo '</pre>';
}

function compare_files($a, $b) {
	$a = pathinfo( $a );
	$b = pathinfo( $b );

	if ( strcmp($a['extension'], $b['extension']) == 0 ) {
		return strcmp( $a['filename'], $b['filename'] );
	}

	return strcmp($a['extension'], $b['extension']);
}

$dir = 'files';
$files = scandir($dir);

usort( $files, 'compare_files' );
print_array( $files );