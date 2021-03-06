<?php
session_start();

if(!ISSET($_SESSION['username'])) {
	header("Location:login.php");
}
if(ISSET($_POST['submitButton'])) {
	$search = $_POST['search'];
	
	require('dbc.php');
	$query = "SELECT * FROM `recipes`";
	$result = mysqli_query($dbc, $query) or DIE("Bad connection to recipes.");
}
?>
<html>
<head>
	<link rel="stylesheet" href="main.css">
	<style>
	*{
		margin:0;
		padding: 0;
	}
	.rectangle {
		height: 800;
		width: 500px;
		background-image: linear-gradient(brown, black);
		opacity: 0.9;
		top: 40%;
		left: -24%;
		position: relative;
		border-radius: 50px;
	}
	body {
		background-image: url('search.jpg');
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	
	.text{
		color: white;
		position: absolute;
		top:8%;
		left:2%;
		font-size: 35px;
		font-family: "Arial Black";
	}
	.container img{
				width: 100%;
				height: 100%;
	}
	.button{
		top:90%;
		left:10%;
	}
	.recipe {
		font-size: 15px;
		top: 20%;
		left: 20%;
		position: absolute;
	}
	.logout {
		color:white;
		font-family:'Arial Black';
		font-size: 25px;
		position:absolute;
		top:8%;
		left:87%;
	}
	
	</style>
</head>
<body>
<div class = "container">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<a href="logout.php" class="logout"><p name="logout" style="position:fixed;">Logout</p></a>
	</form>
	<div class = "text">
	<h1 style="color:rgb(124,15,14)">Search By Name:</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="search"></br></br>
		<div class = "button">
		<input type="submit" name="submitButton" value="Search" style="width:65px;height: 35px;"></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		<div class="recipe">
		<?php
			if(ISSET($_POST['submitButton'])) {
				while($row = mysqli_fetch_array($result)) {
					if(strpos(strtolower($row['name']), strtolower($search)) !== false) {
						echo "<div class='rectangle'></br></br><h1 style='color:rgb(255,30,14);opacity:1.0;'>" . $row['name'] . 
						"</h1><h2 style='color:rgb(255,140,14);opacity:1.0;'>Ingredients</h2></br>".$row['ingredients'] . 
						" </br><h2 style='color:rgb(255,200,14);opacity:1.0;'>Instructions</h2></br>". $row['instructions'];
						echo "</br><h2 style='color:rgb(255,255,14);opacity:1.0;'>Price: " . $row['price'] . "</h2></br></br>
						<h1><a href='paid.php' style='color:rgb(255,255,14);'>Pay Now!</a></h1>
						</div>
						</br></br></br></br>";
					}
				}
			}
		?></div>
		</div>
	</form>
</div>
</div>
</body>
</html>
