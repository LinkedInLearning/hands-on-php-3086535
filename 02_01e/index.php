<?php
echo 'Create your list of choices: ' . "\n\n";

$choices = array();

do {
  $choices[] = readline( 'Add another choice? (Type 0 to stop)' );
} while ( '0' != end($choices) );

array_pop( $choices );

echo 'And the decision is... ' . $choices[array_rand( $choices )];