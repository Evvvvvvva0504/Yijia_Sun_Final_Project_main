<?php
// connect html form to the database

$DATABASE_HOST = 'localhost'; // define the database host address 数据库主机地址
$DATABASE_USER = 'root'; // define the database username. root means the highest authority
$DATABASE_PASSWORD = ''; // root account by default has a blank password
$DATABASE_NAME = 'cmac240_final_signup&login_form'; // define the database name the form will connect to

$mysqli = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);

// add error handling mechanism

    // check the database is connected or not
if (mysqli_connect_error()) {
    exit('Error connecting to the database'.mysqli_connect_error()); // mysqli_connect_error() function: returns a string that describes the error. NULL if no error occurred.
}

// return the database
return $mysqli;