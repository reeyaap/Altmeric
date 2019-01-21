<?php
$db_host = "localhost"; //Host address (most likely localhost)
$db_name = "FineArts"; //Name of Database
$db_user = "root"; //Name of database user
$db_pass = "richik"; //Password for database user

GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;


if (mysqli_connect_errno()) {
    //display the reason for mysql connection error.
    echo "Connection Failed: " . mysqli_connect_errno();
    exit();

}

else {
    echo "Connection Successful";
}





















