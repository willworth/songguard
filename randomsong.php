<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
</br>
</br>

<div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <testinlinestyle style="text-align: center;">

          <p class=lead >This feature is coming soon, we promise!  Why not throw a dart at the
               <a href="/songguard/all.php">full list</a> for now?</p>
          <p><a href="/songguard/all.php" class="btn btn-lg btn-primary">View *all* the songs.</a></p>
        </div>
    </testinlinestyle>
        <div class="col-md-4">

        </div>
      </div>
    </div>
</div>

<?php
/*
following is horrid, fast pseudo code!!!

mt_rand(min,max);
mt_rand(1,numberRowsInDbTable);

if mt_rand (result) in ids in rows, return that song

else loop


*/



 require("includes/footer.php"); ?>
