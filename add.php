<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php
$song_title = prep_mysql($_POST['song_title']);// prep_msql is validation- see functions.php
$artist =prep_mysql($_POST['artist']);
$lyrics =prep_mysql($_POST['lyrics']);
$notes =prep_mysql($_POST['notes']);
//echo "Hello world!<br>";
echo "Successfully received ", "{$song_title}</br>";
//echo "Successfully received ", "{$artist}</br>";
//echo "Successfully received ", "{$lyrics} </br>";
//echo "Successfully received ", "{$notes}</br>";
?>

<?php
	$query = "INSERT INTO songs (
				song_title, artist, lyrics, notes
			) VALUES (
				'{$song_title}', '{$artist}', '{$lyrics}', '{$notes}'
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
?></br></br></br>




<div class="jumbotron">
	<div class="container">
	<div class="row">
		<div class="col-md-4">
		<p class=lead></p>
		<p><a href="/songguard/index.php" class="btn btn-lg btn-warning">It worked!</a></p>
		</div>
		<div class="col-md-4">
		<p class=lead></p>
		<p><a href="/songguard/form.php" class="btn btn-lg btn-primary">Add another song!</a></p>
		</div>
		<div class="col-md-4">
		<p class=lead></p>
		<a href="/songguard/all.php" class="btn btn-lg btn-success">View full list!</a>
		</p>
		</div>
	</div>
	</div>
</div>
















</br>
<?php require("includes/footer.php"); ?>
