<?php
session_start();

if(ISSET($_POST['submitButton'])) {
	
	//variables
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	
	//check if empty
	if (empty($uname) || empty($pass)) {
		$msg = "You have not filled in all of the required fields.";
	}
	
	//validation
	else {
		require('dbc.php');
		$query = "SELECT * FROM `users` WHERE `username` = '$uname'";
		$result = mysqli_query($dbc, $query) or DIE ("Query did not work from login page.");
		while ($row = mysqli_fetch_array($result)) {
			if ($pass == $row['password']) {
				$_SESSION['name'] = $row['name'];
				$_SESSION['username'] = $row['username'];
				header("Location:index.php");
			}
		}
		$msg = "Username or Password is incorrect.";
	}
}
session_destroy(); /////////////////////////////don't forget to destroy!!!!!!! Temporary!!!!
?>
<html>
<head>
</head>
<body>
<h1>Welcome to the Login Page</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Username: <input type="text" name="username"></br></br>
	Password: <input type="password" name="password"></br>
	<input type="submit" name="submitButton" value="Login">
</form>
<p>Haven't signed up yet? <a href="signup.php">Click Here</a> to sign up.</p>
<?php if (ISSET($msg)) { echo $msg; } ?>
</body>
</html>