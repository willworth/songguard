<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/* this page will dynamically generate a page to display a song clicked on in
the all.php listings.

*/



if(isset($_GET["id"]))
{
    echo "Your song id: " . $_GET["id"];
    $id = ($_GET['id']);//if using mysql
}
else echo "failured to get the id. ";

?>

<fieldset>
<table table id="example" class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
        <thead>
            <tr>
                <td>Song ID</td>
                <td>Song</td>
                <td>Artist</td>
                <td>Chords / Lyrics</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            if (!$mysqli) {
                die(mysql_error());
            }

        $result = $mysqli->query("SELECT * FROM `songs` WHERE `id` = '".$id. "'");
            while($row = $result->fetch_assoc()) {
            ?>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['song_title']?></td>
                    <td><?php echo $row['artist']?></td>
                    <td><pre><?php echo $row['lyrics']?></pre></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>


</fieldset>
    </form>
</body>
</html>

<?php
require("includes/footer.php"); ?>
