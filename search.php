<?php
if(ISSET($_POST['submitButton'])) {
	$search = $_POST['search'];
	
	require('dbc.php');
	$query = "SELECT * FROM `recipes`";
	$result = mysqli_query($dbc, $query) or DIE("Bad connection to recipes.");
}
?>
<html>
<head>
	<!--<link rel="stylesheet" href="main.css">-->
	<style>
	*{
		margin:0;
		padding: 0;
	}
	.text{
		color: white;
		position: absolute;
		top:8%;
		left:12%;
		font-size: 35px;
		font-family: "Arial Black";
	}
	.container img{
				width: 100%;
				height: 100%;
	}
	.button{
		position: absolute;
		top:90%;
		left:10%;
	}
	</style>
</head>
<body>
<div class = "container">
	<img src = "search.jpg" width = "100px">
	<div class = "text">
	<h1>Search By Name:</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="search"></br></br>
		<div class = "button">
		<input type="submit" name="submitButton"></br>
		</div>
	</form>
<?php
if(ISSET($_POST['submitButton'])) {
	while($row = mysqli_fetch_array($result)) {
		if(strpos(strtolower($row['name']), strtolower($search)) !== false) {
			echo "<h2>" . $row['name'] . "</h2> ".$row['ingredients'] . " </br>". $row['instructions'];
			echo "</br>Price: " . $row['price'];
		}
	}
}
?>
</div>
</div>
</body>
</html>