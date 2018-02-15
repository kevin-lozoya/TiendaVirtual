<?php
$server = "server";
$user = 'user';
$password = 'password';
$database = 'database';

$conn = new mysqli($server, $user, $password, $database);
$conn->set_charset('utf8');
?>