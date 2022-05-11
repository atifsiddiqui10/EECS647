<?php
//configuration file for database
define('DB_SERVER', 'mysql.eecs.ku.edu');
define('DB_USERNAME', 'm145s484');
define('DB_PASSWORD', 'Keegae3z');
define('DB_NAME', 'm145s484');

$link= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

error_reporting(E_ALL);
ini_set('display_errors', '1');

if($link === false){
    die("ERROR: Could not connect. " . mysql_connect_error());
}
?>