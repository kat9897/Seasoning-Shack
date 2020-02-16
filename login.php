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
?>
<html>
<head>
<style>
*{
	margin:0;
	padding: 0;
	
	
}
.text{
	color: white;
	position: absolute;
	top:40%;
	left:12%;
	font-size: 35px;
	font-family: "Arial Black";
	}
.container img{
	width: 100%;
	position:absolute;
	top:0px;
	left:0px;
	
}

</style>
</head>
<body></br></br></br></br></br></br></br></br></br>
<div class = "container">
	<img src = "login.jpg" width = "100px">
	<div class = "text">
<h1>Welcome to the Login Page</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Username: <input type="text" name="username"></br></br>
	Password: <input type="password" name="password"></br></br>
	<input type="submit" name="submitButton" value="Login">
</form>
<p>Haven't signed up yet? <a href="signup.php">Click Here</a> to sign up.</p>
<p><?php if (ISSET($msg)) { echo $msg; } ?></p>
</div>
</div>
</body>
</html>