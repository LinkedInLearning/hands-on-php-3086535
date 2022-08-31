<?php

require_once( 'class.Person.php' );
require_once( 'class.Student.php' );

$alice = new Person( 'Alice', '1987-07-12' );
$bob = new Student( 'Bob', '2002-03-06', '123 Center Square, Middletown, NY 10940' );

echo $alice->get_age() . '<br/>'; 
echo $bob->get_age() . '<br/>';
echo $bob->get_major();