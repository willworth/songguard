<!DOCTYPE html>
<html>
<head>
  <title>Song Guard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!--<link rel="stylesheet" type="text/css" href="includes/style.css"> -->
  <!--  built using tutorials from http://www.w3schools.com/bootstrap/default.asp
                            and https://developers.soundcloud.com/docs/api/guide
  -->
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Song Guard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Add Song</a></li>
        <li><a href="#">View All</a></li>
        <li><a href="#">View Random</a></li>
        <li><a href="#">About Song Guard</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
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
    <textarea class="form-control" id="textarea" name="textarea">You put your left leg in. (Drag to resize.)</textarea>
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

<!-- Multiple Radios (inline) -->
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

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Additional Notes</label>
  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="textarea">Add your performance notes here. (Drag to resize.)</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Finished?</label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Save</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Discard</button>
  </div>
</div>

</fieldset>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
