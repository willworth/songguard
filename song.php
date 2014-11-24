<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/* this page will dynamically generate a page to display a song clicked on in
the all.php listings.
//echo "Successfully received " . $_POST["id"] ;

as things stand, I´m just trying to pull one specific record, to organise the layout

we can then work on choosing which file we want to display...


*/





    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if (!$mysqli) {
        die(mysql_error());
    }


$result = $mysqli->query("SELECT * FROM `songs` WHERE `id` = 3");
while($row = $result->fetch_assoc()) {
?>
        <td><?php $x =$row['id']; echo $x;?></td>
        <td><?php echo $row['song_title']?></td>
        <td><?php echo $row['artist']?></td>
        <td><?php echo $row['lyrics']?></td>
        <td>
        <button id="button1id" class="btn btn-sm btn-success" input type="submit" name="id"  value =  ><span class="glyphicon glyphicon-eye-open"></span></button>
        <a href="#" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-star"></span></a>
        <a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
    </tr>
<?php
}
?>
<?php
require("includes/footer.php"); ?>
