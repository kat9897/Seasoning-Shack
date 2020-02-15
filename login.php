<?php
session_start();

if(ISSET($_POST['submitButton'])) {
	
}

?>
<html>
<head>
</head>
<body>
<h1>Welcome to the Login Page</h1>
<form method="POST" action="<?php echo $_SERVER['SELF']; ?>">
	Username: <input type="text" name="username"></br>
	Password: <input type="password" name="password"></br>
	<input type="submit" name="submitButton" value="Sign Up">
</form>
</body>
</html>