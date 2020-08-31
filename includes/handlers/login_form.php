<?php 
	if($_POST){
		if(isset($_POST['loginButton'])){
			if(!isset($_POST['loginEmail']) || !isset($_POST['loginPassword']) || empty($_POST['loginEmail']) || empty($_POST['loginPassword'])){
				echo "All the fields are required";
			}
			else{
				$password = md5($_POST['loginPassword']);
				$query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($con, $_POST['loginEmail']) ."' AND password  = '". mysqli_real_escape_string($con, $password) ."' LIMIT 1";
				if($con->query($query)->num_rows == 1){
					$_SESSION['loggedIn'] = true;
					$_SESSION['email'] = $_POST['loginEmail'];
					header("location: dashboard.php");
				}
				else{
					echo "The combination of the email and password dosent match. Please try again.";
				}
			}
		}
	}
?>	