<?php
$query = "SELECT * FROM `";

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
			.rectangle{
				height: 800px;
				width: 1150px;
				background-color: #555;
				opacity: 0.4;
				position: absolute;
				top:4%;
				left:4%;
			}
			.searching{
				color: white;
				font-family: "Arial Black";
				font-size: 50px;
				position: absolute;
				top:4%;
				left:16%;
			}
			.zoom {
				padding: 50px;
				background-color: white;
				transition: transform .2s; 
				position:absolute;
				width: 170px;
				height: 160px;
				opacity:0.5;
				top:25%;
				left:16%;
				margin: 0 auto;
			}
			.zoom:hover {
				transform: scale(1.2); 
			}
		</style>
	</head>
	
	<body>
		<div class = "container">
<!--			<img src = "search_picture_back.png" width = "100px">-->
			<div class="rectangle"></div>
			<div class = "searching">Search: </div>
			<div class="zoom"></div>
		</div>
		
	</body>
</html>