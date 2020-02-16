<?php

$msg = "";
session_start();

if(ISSET($_POST['submitButton'])) {
	
	$uname = $_POST['username'];
	require('signupValidation.php');
	
	if ($actualValid == true) {
		require('dbc.php');
		$query1 = "SELECT * FROM `users`";
		$query2 = "INSERT INTO `users` (`user_id`, `name`, `email`, `address`, `username`, `password`) 
		VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['street'].'</br> '.$_POST['city'].', '.$_POST['province'].
		'</br>'.$_POST['country']."', '$uname', '".$_POST['password1']."');";
		$resultCheck = mysqli_query($dbc, $query1) or DIE("Failed connection for check from signup.");
		$sameCheck = false;
		while ($row = mysqli_fetch_array($resultCheck)) {
			if ($row['username'] == $uname) {
				$sameCheck = true;
				break;
			}
		}
		if ($sameCheck == false) {
			$result = mysqli_query($dbc, $query2) or DIE("Failed connection to database from signup.");
			$_SESSION['username'] = $uname;
			$_SESSION['name'] = $_POST['name'];
			header("Location:index.php");
		}
		else {
			$msg = $msg . "</br>That username is already taken.";
		}
	}
	else {
		$msg = $msg . "</br></br>Just look at the error messages...</br>";
	}
}
?>
<html>
<head>
<style>
body {
  background-color: rgb(225,210,189);
}
h1 {
	font-family: "Arial Black";
  text-align: center;
}
p {
	font-family: "Arial Black";
  text-align: center;
}
form{
	font-family: "Arial Black";
	text-align:center;
}
</style>
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
<p>Already signed up? <a href="login.php">Click here</a> to login.</p>
<?php if(ISSET($msg)) { echo $msg; } ?>
<h2><u>Requirements</u></h2>
<ul>
	<li>Name must be between 2 and 30 characters.</li>
	<li>Name must not contain numbers.</li>
	<li>Name must not contain any special characters.</li></br>
	<li>Email must be a valid email.</li>
	<li>Email must not be greater than 28 characters.</li></br>
	<li>Street/Road length may not exceed 28 characters or be left empty.</li></br>
	<li>Town/City length may not exceed 47 characters or be left empty.</li></br>
	<li>You must select a province/territory.</li></br>
	<li>Country must be less than 74 characters and not empty.</li></br>
	<li>Username must be between 2 to 25 characters.</li>
	<li>Username must include at least 1 number.</li>
	<li>Username must include at least 1 capital letter.</li></br>
	<li>Password must be between 7 to 18 characters.</li>
	<li>Password must contain at least 1 number.</li>
	<li>Password must contain at least 1 capital letter.</li></br>
	<li>Second password must match the first.</li>
</ul>
</br></br></br>
</body>
</html>