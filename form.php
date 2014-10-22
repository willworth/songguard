<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add song to Song Guard</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Song Title</label>
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="Enter song title here" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Artist</label>
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="Enter artist here." class="form-control input-md" required="">
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Chords/Lyrics</label>
  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="textarea">"You put your left leg in."</textarea>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Did you write that?</label>
  <div class="col-md-4">
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Original
    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Cover
    </label>
  </div>
</div>


<!-- Multiple Radios performance ready? (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Performance Ready?</label>
  <div class="col-md-4">
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      No
    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Yes
    </label>
  </div>
</div>

<!-- Textarea   addtional notes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Additional Notes</label>
  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="textarea">These text boxes can be resized from the lower right corner.</textarea>
  </div>
</div>

<!-- Button (Double)   (Ready to submit?) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Finished?</label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Save</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Discard</button>
  </div>
</div>

</fieldset>
</form>

<?php include("includes/footer.php"); ?>
