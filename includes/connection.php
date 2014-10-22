<?php
require("constants.php");

// 1. Create a database connection
//from w3schools: $conn = new mysqli($servername, $username, $password, $dbname);
$connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//  old $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}
// I think the below is now redundant...
/*
// 2. Select a database to use
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
*/
