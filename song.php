<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/* this page will dynamically generate a page to display a song clicked on in
the all.php listings.
$_POST['id']     {$song_title}

$_POST['key'] = "foo";
echo $_POST['key'];
*/

echo "Successfully received " . $_POST["id"] ;
//echo "You have successfully arrived at the song page.  ID received is ", $_POST['wid'];


// ID received is ", $_POST["id"];
//$id

require("includes/footer.php"); ?>
