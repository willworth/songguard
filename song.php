<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/* this page will dynamically generate a page to display a song clicked on in
the all.php listings.
$_POST['id']     {$song_title}
*/
$id = $_POST['id'];
echo "You have successfully arrived at the song page.  ID received is ", $id;


// ID received is ", $_POST["id"];
//$id

require("includes/footer.php"); ?>
