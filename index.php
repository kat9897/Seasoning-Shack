<?php
session_start();

if(!ISSET($_SESSION['username'])) {
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Seasoning Shack</title>
		
		<style>
			*{
				margin:0;
				padding: 0;
			}
			.container img{
				width: 100%;
				height: 100%;
			}
			.signin{
				color: white;
				font-family: "Arial Black";
				font-size: 35px;
				position: absolute;
				top:5%;
				left:77%;
			}
			.signup{
				color: white;
				font-family: "Arial Black";
				font-size: 35px;
				position: absolute;
				top:5%;
				left:88%;
			}
			.title{
				color: black;
				font-family: "Arial Black";
				font-size: 95px;
				position: absolute;
				top:50%;
				left:47%;
				background-color: white;
				opacity: 0.7;
			}
			.topic{
				color: white;
				font-family: "Arial Black";
				font-size: 35px;
				position: absolute;
				top:100%;
				left:80%;
			}
			.phone_num{
				color: white;
				font-family: "Arial Black";
				font-size: 15px;
				position: absolute;
				top:107%;
				left:80%;
			}
			.email{
				color: white;
				font-family: "Arial Black";
				font-size: 15px;
				position: absolute;
				top:110%;
				left:80%;
			}
			.contributor{
				color: white;
				font-family: "Arial Black";
				font-size: 15px;
				position: absolute;
				top:117%;
				left:80%;
			}
			.login{
				color: white;
				font-family: "Arial Black";
				font-size: 25px;
				position: absolute;
				top:8%;
				left:80%;
			}
			.signup{
				color: white;
				font-family: "Arial Black";
				font-size: 25px;
				position: absolute;
				top:8%;
				left:87%;
			}
			.logout {
				color: white;
				font-family: "Arial Black";
				font-size: 25px;
				position: absolute;
				top:8%;
				left:78%;
			}
		</style>
	</head>
	
	<body>
		<div class = "container">
			<img src = "background_main.jpg" width = "100px">
			<a class="signup" href="search.php"><u>Search</u></a>
			<a class = "logout" href="logout.php"><u>Logout</u></a>
			<div class = "title">SEASONING SHACK</div>
		</div>
		
		<div class ="about_us">
			<div class = "topic">About us</div>
			<div class = "phone_num">Telephone: 888-888-888</div>
			<div class ="email">Email: seasoning.shack@mail.ss.com</div>
			<div class ="contributor">Contributors:<Br>Katrina Best, Mojtaba Khavanin, Guo Cheng<Br>Jeffrey He, Zixiao Ren</div>
		</div>
	</body>
</html>