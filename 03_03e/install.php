<?php

$mysqli = new mysqli("127.0.0.1", "mariadb", "mariadb", "mariadb");

$queries = file_get_contents('speakers.sql');   
mysqli_multi_query($mysqli, $queries);