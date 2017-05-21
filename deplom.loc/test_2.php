

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test_3.php" method="post">
		<?php 
		ini_set('display_errors', 'on');
		include ('connect.php');
		$test_1 = strip_tags(trim($_POST['test_1']));
		if (isset($_POST['test_1'])){
		$rez = mysql_query ("SELECT * FROM `test_2` WHERE test_1='$test_1'");
		while ($row = mysql_fetch_array ($rez)){
			echo "<input name=\"test_2\" type=\"radio\" value='".$row['test_2']."'>".$row['test_2']."</option>"."<br>";
		}
		}
		mysql_close();
		?>

		<br>
		<input type="submit" name="ok">
	</form>
</body>
</html>