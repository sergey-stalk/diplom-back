

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="article.php" method="post">
		<?php 
		ini_set('display_errors', 'on');
		include ('connect.php');
		$test_3 = strip_tags(trim($_POST['test_3']));
		if (isset($_POST['test_3'])){
		$rez = mysql_query ("SELECT * FROM `pre_result` WHERE test_3='$test_3'");
		while ($row = mysql_fetch_array ($rez)){
			echo "<input name=\"pre_result\" type=\"radio\" value='".$row['pre_result']."'>".$row['pre_result']."</option>"."<br>";
		}
		}
		mysql_close();
		?>

		<br>
		<input type="submit" name="ok">
	</form>
</body>
</html>