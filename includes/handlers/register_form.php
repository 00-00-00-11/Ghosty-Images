<?php 
	if($_POST){
		if(isset($_POST['registerButton'])){
			if(!isset($_POST['registerEmail']) || !isset($_POST['registerPassword']) || empty($_POST['registerEmail']) || empty($_POST['registerPassword'])){
				echo "All the fields are required";
			}
			else{
				$password = md5($_POST['registerPassword']);
				$query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($con, $_POST['registerEmail']) ."' LIMIT 1";
				if($con->query($query)->num_rows == 1){
					echo "An account with that email already exists";
				}
				else{
					$registerQuery = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '". mysqli_real_escape_string($con, $_POST['registerEmail']) ."', '". mysqli_real_escape_string($con, $password) ."')";
					$con->query($registerQuery);
					$_SESSION['loggedIn'] = true;
					$_SESSION['email'] = $_POST['loginEmail'];
					header("location: dashboard.php");
				}
			}
		}
	}
?>