<?php
$mysqli = new mysqli("127.0.0.1", "mariadb", "mariadb", "mariadb");

$r = $mysqli->query('SHOW COLUMNS FROM speakers;');
echo '
<pre>';
var_dump($r->fetch_all());
echo '</pre>';
