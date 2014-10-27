<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php
$song_title =$_POST['song_title'];
$artist =$_POST['artist'];
$lyrics =$_POST['lyrics'];
$notes =$_POST['notes'];
//echo "Hello world!<br>";
echo "Successfully received ", "{$song_title}</br>";
echo "Successfully received ", "{$artist}</br>";
echo "Successfully received ", "{$lyrics} </br>";
echo "Successfully received ", "{$notes}</br>";
?>

<?php
	$query = "INSERT INTO songs (
				song_title, artist, lyrics, notes,
			) VALUES (
				'{$song_title}', '{$artist}', '{$lyrics}', '{$notes}',
			)";
            if (mysqli_query($connection, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}



    //
	// $result = mysqli_query($connection, $query);
	// if ($result) {
	// 	// Success!
	// 	redirect_to("success.php");
	// } else {
	// 	// Display error message.
	// 	echo "<p>Subject creation failed.</p>";
	// 	echo "<p>" . mysql_error() . "</p>";
	// }
?>

<?php require("includes/footer.php"); ?>
