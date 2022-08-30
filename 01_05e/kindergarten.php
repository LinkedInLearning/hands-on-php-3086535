<?php

namespace kindergarten;

function first_day_of_school() {
	return date('l F j, Y h:i a', mktime(8, 25, 0, 8, 30, 2022));
}

function get_dimissal_time() {
	return date('h:i a', mktime(11, 35, 0));
}

/* In Kindergarten, grades range from 1-5, and 
students get a P for pass, I for incomplete
*/
function average($grades) {
	
	return ( (array_sum($grades) / sizeof($grades) > 2.5) ) ? 'P' : 'I';
}

function has_honors($gpa) {
	return true;
}

echo '<h2>Kindergarten</h2>';
echo first_day_of_school(); 