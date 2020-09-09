<?php 
	session_start();
	include("config.php");
	include("functions.php");
	include("includes/handlers/login_form.php");
	include("includes/handlers/register_form.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic Login/Register system by Ryder</title>
	<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="includes/js/bootstrap.js">
	<style type="text/css">
		#main{
			background-image: url("includes/img/background.jpg");
			background-size: 100%;
			background-repeat: no-repeat;
			text-align: center;
			color: white;
			margin-top: 60px;
		}
		.container{
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="home"></div>
	
	<nav class="navbar navbar-light bg-light fixed-top">
	  <a class="navbar-brand">Ghosty <span style="color: black;">Images</span></a>
	  <form class="form-inline" method="post">
	  	<input class="form-control mr-sm-2" type="email" placeholder="Email" name="loginEmail">
	    <input class="form-control mr-sm-2" type="password" placeholder="Password" name="loginPassword">
	    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="loginButton">Login</button>
	  </form>
	</nav>

	<div class="jumbotron" id="main">
	  	<h1 class="display-4">Ghosty Images!</h1>
	  	<p class="lead">Get rid of hassle of uploading a image again and again. Upload once and use forever ;)</p>
		<a href="#register">
			<button type="submit" class="btn btn-primary mb-2">Sign Up</button>
		</a>
	</div>

	<div class="container">
		<h1>Why choose us?</h1>
		<div class="card-deck" style="margin-top: 30px;">
		  <div class="card">
		    <div class="card-body">
		      <h5 class="card-title">Open Source</h5>
		      <p class="card-text">Ghosty Images is an open sourced project. The source of it could be found <a href="https://github.com/RyderAsKing/Ghosty-Images">here</a>.</p>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-body">
		      <h5 class="card-title">Uptime</h5>
		      <p class="card-text">Our servers have 99.9% uptime. We have nothing to hide, hence the status monitor is public and can be found <a href="https://status.ghosty.host/">here</a>.</p>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-body">
		      <h5 class="card-title">Unlimited Storage</h5>
		      <p class="card-text">We offer you to upload <strong>unlimited</strong> files. However there is a limit of each file size of 5MB ;)</p>
		    </div>
		  </div>
		</div>
	</div>

	<div class="container" style="margin-top: 30px;">
		<h2 id="register">Register Now</h2>
		<form method="post" style="margin-top: 30px;">
		  <div class="form-group row">
		      <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Email">
		  </div>
		  <div class="form-group row">
		      <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary mb-2" name="registerButton">Sign Up</button>
		</form>
	</div>

	<div class="card text-center" style="margin-top: 30px;">
	  <div class="card-header">
	    Thats it?
	  </div>
	  <div class="card-body">
	    <h5 class="card-title"></h5>
	    <p class="card-text">Copyright ©2020 All rights reserved | @Ryder.</p>
	    <a href="#home" class="btn btn-primary">Back to top</a>
	  </div>
	</div>
</body>
</html>
