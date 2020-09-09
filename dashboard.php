<?php 
	session_start();
	include("config.php");
	include("functions.php");
	if(checkLogin() == false){
		header("location: index.php");
	}
	else{
		echo "Logged in";
	}
?>
