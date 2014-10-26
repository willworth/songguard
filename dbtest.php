<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<form action="add.php" method=post class="form-horizontal">


<!-- Song Title Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Song Title</label>
  <div class="col-md-5">
  <input id="textinput" name="song_title" type="text" placeholder="Enter song title here" class="form-control input-md" required="">
  </input>
  </div>
</div>
<input type="submit" value="Submit">

</form>

<?php include("includes/footer.php"); ?>
