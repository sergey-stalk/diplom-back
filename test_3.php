

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
		$test_2 = strip_tags(trim($_POST['test_2']));
		if (isset($_POST['test_2'])){
		$rez = mysql_query ("SELECT * FROM `test_3` WHERE test_2='$test_2'");
		while ($row = mysql_fetch_array ($rez)){
			echo "<input name=\"test_3\" type=\"radio\" value='".$row['test_3']."'>".$row['test_3']."</option>"."<br>";
		}
		}
		mysql_close();
		?>

		<br>
		<input type="submit" name="ok">
	</form>
</body>
</html>