<?php 

function first_day_of_school() {
	return date('l F j, Y h:i a', mktime(8, 25, 0, 8, 29, 2022));
}

function get_dimissal_time() {
	return date('h:i a', mktime(14, 45, 0));
}

function average($grades) {
	return array_sum($grades) / sizeof($grades);
}

function has_honors($gpa) {
	return $gpa > 3.5;
}

require_once( 'kindergarten.php' );

echo first_day_of_school();