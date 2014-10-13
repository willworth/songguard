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

</br>
</br>
</br>
</br>
</br>
<div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p>Song Guard is designed to store your lyrics, notes, and musical ideas.</p>
        </div>
        <div class="col-md-4">
          <p>Organise your original material with supporting notes, as well as all
          those covers you´ve been trying to keep track of.</p>
        </div>
        <div class="col-md-4">
          <p>Seemless integration with <a href="https://soundcloud.com/">Soundcloud</a>
         allows you to store and access your audio.</p>
        </div>
      </div>
    </div>
</div>
<div class="container">
<input type="text" placeholder="Text input" >
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
