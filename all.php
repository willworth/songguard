<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<form action="song.php" method=get class="form-horizontal">
<fieldset>
<table table id="example" class="table table-striped table-hover table-bordered table-condensed" width="100%" cellspacing="0">
        <thead>
            <tr>
                <!--<td>Entry ID</td>!-->
                <td>Song</td>
                <td>Artist</td>
                <td>Options</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            if (!$mysqli) {
                die(mysql_error());
            }

            $result = $mysqli->query("SELECT id, song_title, artist FROM `songs` ORDER BY `songs`.`artist` ASC");
            while($row = $result->fetch_assoc()) {
            ?>
                    <!--<td><?php echo $row['id']?></td> !-->
                    <td><?php echo $row['song_title']?></td>
                    <td><?php echo $row['artist']?></td>
                    <td>
<a href="song.php?id=<?php echo $row['id'] ?>">
                    <button id="button1id" class="btn btn-sm btn-success" input type="submit" name="id"  value="{$row['id']}"  ><span class="glyphicon glyphicon-eye-open"></span></button></a>
                    <a href="#" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-star"></span></a>
                    <a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
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





<!--



<?php

// $res = mysqli_query($connection,"SELECT id, song_title, artist FROM `songs`");
//
// if($res === FALSE) {
//     echo "boo!";
//     die(mysql_error()); // TODO: better error handling
// }
//
// $sql = "SELECT id, song_title, artist FROM `songs`";
// $result = mysqli_query($connection, $sql);
//
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["song_title"]. " " . $row["artist"]. "<br>";
//     }
// } else {
//     echo "0 results";
// } --> -->
// if (!$mysqli_query) {
//         echo 'MySQL Error: ' . mysqli_error();
//         exit;
//     }
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];
//
// if ($res->num_rows > 0) {
//     // output data of each row
//     while($row = $res->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["song_title"]. " " . $row["artist"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// ?>
//
// ?>
//
// //"id: " . $row["id"]. -->
<?php require("includes/footer.php"); ?>
