<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/* this page is to build an example layout for an individual song

*/
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

        $result = $mysqli->query("SELECT * FROM `songs` WHERE `id` = 48");
            while($row = $result->fetch_assoc()) {
            ?>
                    <td><?php $x =$row['id']; echo $x;?></td>
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
