<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Show ARTICLE</title>

		
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<div class="wrapper">
			<?php
				include ("connect.php");
				$rez = mysql_query("SELECT * FROM `article`");
				while ($row = mysql_fetch_array ($rez)){
					echo "<h3>".$row['pre_result']."</h3>"."<article>".$row['article']."</article>";
				}
			?> 
			</div>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
	<script  src="js/accordion.js"></script>
</body>
</html>