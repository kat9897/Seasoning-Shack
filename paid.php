<?php
session_start();

if(!ISSET($_SESSION['username'])) {
	header("Location:login.php");
}
?>
<html>
<head>
<style>
body {
		background-image: linear-gradient(brown, black);
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
h1 {
	color:white;
	font-family: 'Arial Black';
	font-size: 60px;
	position: absolute;
	top: 40%;
	text-align: center;
}
</style>
</head>
<body>
<h1>You have paid! <a style="color:grey;text-align: center;" href="search.php">Click here</a> to go back to search results.</h1>
</body>
</html>