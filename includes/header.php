<?php
require("connection.php");
?>
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
      <a class="navbar-brand" href="/songguard/index.php">Song Guard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Home</a></li>-->
        <li><a href="/songguard/form.php">Add Song</a></li>
        <li><a href="#">View All</a></li>
        <li><a href="#">View Artist List</a></li>
        <li><a href="#">View Random Song</a></li>
        <li><a href="#">About Song Guard</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
