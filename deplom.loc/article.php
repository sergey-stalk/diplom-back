
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<form action="pre_result.php" method="post">
		<?php 
		ini_set('display_errors', 'on');
		include ('connect.php');
		$pre_result = strip_tags(trim($_POST['pre_result']));
		if (isset($_POST['pre_result'])){
		$rez = mysql_query ("SELECT * FROM `article` WHERE pre_result='$pre_result'");
		while ($row = mysql_fetch_array ($rez)){
			echo "<p>".$row['article']."</p>";
		}
		}
		mysql_close();
		?>

		<br>
		<input type="submit" name="ok" value="Вернуться к статьям">
	</form>
</body>
</html>