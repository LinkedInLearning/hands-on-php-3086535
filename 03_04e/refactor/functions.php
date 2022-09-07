<?php 

$host = '127.0.01';
	$user = 'mariadb';
	$pass = 'mariadb';
	$db = 'mariadb';

$mysqli = new mysqli(
	$host,
	$user,
	$pass,
	$db
);

function get_all_speakers($mysqli) {
	return $mysqli->query('SELECT * FROM speakers;');
}

function get_speaker($id, $mysqli) {
	return $mysqli->query('SELECT * FROM speakers WHERE id="' . $id . '";');
}

function delete_speaker($id, $mysqli) {
	return $mysqli->query("DELETE FROM speakers WHERE id='$id'");
}

function update_record($mysqli)
{
	extract($_POST);
	$bio = filter_var($bio, FILTER_SANITIZE_ADD_SLASHES);
	$desc = filter_var($_POST['desc'], FILTER_SANITIZE_ADD_SLASHES);

	$query = "UPDATE speakers SET name='$name', bio='$bio',	session_name='$session_name', session_desc='$desc' WHERE id='$id';";

	return $mysqli->query($query);
}