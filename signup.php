<?php
$msg = "";
session_start();
if(ISSET($_POST['submitButton'])) {
	require('signupValidation.php');
	if ($actualValid == true) {
		require('dbc.php');
		//$query = "INSERT INTO `users` (`user_id`, `name`, `username`, `password`) 
		//VALUES (NULL, 'Katrina', 'kat9897', 'Katrina');";
		$query = "SELECT * FROM `users`";
		$result = mysqli_query($dbc, $query) or DIE("Failed connection to database from signup.");
	}
	else {
		$msg = $msg . "</br></br>Just look at the error messages...</br>";
	}
	
}
?>
<html>
<head>
</head>
<body>
<h1>This is the Signup Page</h1></br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Name: <input type="text" name="name"></br></br>
	Email: <input type="email" name="email"></br></br>
	Street/Road: <input type="text" name="street"></br></br>
	Town/City: <input type="text" name="city">
	Province/Territory: 
	<select name="province">
		<option value="" selected></option>
		<option value="ontario">Ontario</option>
		<option value="alberta">Alberta</option>
		<option value="saskatchewan">Saskatchewan</option>
		<option value="manitoba">Manitoba</option>
		<option value="british columbia">British Columbia</option>
		<option value="quebec">Quebec</option>
		<option value="newfoundland">Newfoundland/Labrador</option>
		<option value="pei">Prince Edward Island</option>
		<option value="nova scotia">Nova Scotia</option>
		<option value="new brunswick">New Brunswick</option>
		<option value="nunavut">Nunavut</option>
		<option value="nwt">North West Territories</option>
		<option value="yukon">Yukon Territories</option>
	</select></br></br>
	Country: <input type="text" name="country"></br></br>
	Username: <input type="text" name="username"></br></br>
	Password: <input type="password" name="password1"></br></br>
	Confirm Password: <input type="password" name="password2"></br></br>
	<input type="submit" name="submitButton" value="Sign Up"></br>
</form>
<?php if(ISSET($msg)) { echo $msg; } ?>
<h2><u>Requirements</u></h2>

<p>Already signed up? <a href="login.php">Click here</a> to login.</p>
</body>
</html>