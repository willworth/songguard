<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/* this page will dynamically generate a page to display a song clicked on in
the all.php listings.

*/


$id = $_POST["id"];
echo $id;

echo "Successfully received song with id". $_POST["id"];
//$result = $mysqli->query("SELECT * FROM `songs` WHERE `id` = 3");
// $result = str_replace(' ', '&nbsp;', $result);
// $result = nl2br($result);
// while($row = $result->fetch_assoc()) {



require("includes/footer.php"); ?>
