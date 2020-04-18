<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'i2cpbxbi4neiupid.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'oac56jx6izw1t1is');
define('DB_PASSWORD', 'tq2a5ms6u8u2jqwq');
define('DB_NAME', 'wyu871irrg3dv3xw');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
