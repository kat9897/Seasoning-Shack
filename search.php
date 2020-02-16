<?php

if(ISSET($_POST['submitButton'])) {
	$search = $_POST['search'];
	
	require('dbc.php');
	$query = "SELECT * FROM `recipes`";
	$result = mysqli_query($dbc, $query) or DIE("Bad connection to recipes.");
?>
<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<h1>Search By Name:</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="search"></br></br>
	<input type="submit" name="submitButton"></br>
</form>
<?php
	while($row = mysqli_fetch_array($result)) {
		if(strpos(strtolower($row['name']), strtolower($search)) !== false) {
			echo "<h2>" . $row['name'] . "</h2> ".$row['ingredients'] . " </br>". $row['instructions'];
			echo "</br>Price: " . $row['price'];
		}
	}
}
?>
</body>
</html>