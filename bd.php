<?php

// Project will be deploying on heroku.com so will using PostgerSQL
// Host address
$host = 'here-your-host-name';
// DataBase name
$database = 'here-your-database-name';
// User name
$user = 'here-your-user-name';
// User password
$pass = 'here-your-password';

// Connect to postgresSQL 
$dbh = new PDO('pgsql:dbname=' . $database . ';host=' . $host, $user, $pass);
?>