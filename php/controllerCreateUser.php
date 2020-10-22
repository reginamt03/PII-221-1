<?php

include_once 'Database.php';

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'univa';

$objectCreateUSer = new Database($hostname, $username, $password, $database);

$table = 'users';
$email = $_POST['email'];
$password = $_POST['password'];

$objectCreateUSer->create($table, $email, $password);
