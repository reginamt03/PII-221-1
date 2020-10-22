<?php

include_once 'Database.php';


$hostname= $_GET['hostname'];
$username= $_GET['username'];
$password= $_GET['password'];
$database= $_GET['database'];

$objectdatabase = new Database($hostname, $username, $password, $database);
$objectdatabase->testconnect();
