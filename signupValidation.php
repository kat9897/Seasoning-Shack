<?php
	$valid = 0;
	$actualValid = false;
	
	//name check
	$name = $_POST['name'];
	
	if (empty($name)) {
		$msg = $msg . "</br>No name has been entered.";
	}
	elseif (strlen($name) < 2) {
		$msg = $msg . "</br>Name must be at least 2 characters long. Sorry: that's just a rule";
	}
	elseif (strlen($name) > 30) {
		$msg = $msg . "</br>Name is way too long. Cannot be longer than 30 characters";
	}
	elseif (preg_match("/[0-9]/",$name)) {
		$msg =  $msg . "</br>Name may not contain numbers unless you are C3PO";
	}
	elseif ($name == "C3PO") {
		$msg = $msg . "</br>I knew someone would try this but I'm sorry, why would a robot need to sign up for this website?";
	}
	elseif (preg_match("/[.][a-z]$/",$name)) {
		$msg =  $msg . "</br>Name may not contain any special characters";
	}
	else {
		$valid++;
	}
	
	//email check
	$email = $_POST['email'];
	
	if (empty($email)) {
		$msg = $msg . "</br>No email has been entered";
	}
	elseif (!preg_match('/[@]/',$email)) {
		$msg =  $msg . "</br>Email must contain the @ symbol because that's the definition of an email";
	}
	elseif (strlen($email) > 28) {
		$msg =  $msg . "</br>Email cannot exceed 28 letters";
	}
	elseif (!preg_match('/[.][a-z]{2,3}$/',$email)) {
		$msg = $msg . "</br>Email must contain the . symbol and end with a valid domain";
	}
	else {
		$valid++;
	}
	
	//address check
	
	//street
	$street = $_POST['street'];
	
	if(empty($street)) {
		$msg = $msg . "</br>Street or road is empty... So you live in a plain? How?";
	}
	elseif (strlen($street) > 25) {
		$msg = $msg . "</br>Street or road name is too long or sounds pretty close to being made up hmmmmmm
		</br>Must be shorter than 25 characters";
	}
	else {
		$valid++;
	}
	
	//city
	$city = $_POST['city'];
	
	if(empty($city)) {
		$msg = $msg . "</br>You don't live in a city? Are you isolated from humanity?";
	}
	elseif (strlen($city) > 47) {
		$msg = $msg . "</br>The longest city name in the world is Taumatawhakatangihangakoauauotamateaturipukakap so I know no other city can be longer than this";
	}
	else {
		$valid++;
	}
	
	//province
	$prov = $_POST['province'];
	echo $prov;
	
	if($prov == "") {
		$msg = $msg . "</br>You haven't actually selected any province...";
	}
	else {
		$valid++;
	}
	
	//country
	$country = $_POST['country'];
	
	if(empty($country)) {
		$msg = $msg . "</br>You must live in at least one country.... unless you're mystically living in Narnia";
	}
	elseif (strlen($country) > 74) {
		$msg = $msg . "</br>Really? Really....</br>
		Al Jumahiriyah al Arabiyah al Libiyah ash Shabiyah al Ishtirakiyah al Uzma is the longest country name";
	}
	else {
		$valid++;
	}
	
	//username check
	$username = $_POST['username'];	
	
	if (empty($username)) {
		$msg = $msg . "</br>No username has been entered. Can't create an empty person";
	}
	elseif (strlen($username) > 25) {
		$msg = $msg . "</br>Username cannot exceed 25 characters";
	}
	elseif (!preg_match('/[0-9]/',$username)) {
		$msg = $msg . "</br>Username must include at least one number";
	}
	elseif (!preg_match('/[A-Z]/',$username)) {
		$msg = $msg . "</br>Username must include at least one capital letter";
	}
	else {
		$valid++;
	}
	
	//password check
	$pass = $_POST['password1'];
	
	if (empty($pass)) {
		$msg = $msg . "</br>No password has been entered. Security is slightly upset";
	}
	elseif (strlen($pass) > 18) {
		$msg =  $msg . "</br>Password cannot exceed 18 letters";
	}
	elseif (strlen($pass) < 7) {
		$msg =  $msg . "</br>Password must have at least 7 characters";
	}
	elseif (!preg_match("/[0-9]/",$pass)) {
		$msg =  $msg . "</br>Password must contain numbers";
	}
	elseif (!preg_match("/[A-Z]/",$pass)) {
		$msg =  $msg . "</br>Password must contain at least one capital letter";
	}
	else {
		$valid++;
	}
	
	//password match check
	$pass2 = $_POST['password2'];
	
	if ($pass2 !== $pass || empty($pass2)) {
		$msg = $msg . "</br>Your second password does not match your first";
	}
	else {
		$valid++;
	}
	
	if ($valid >= 9) {
		$actualValid = true;
	}
?>