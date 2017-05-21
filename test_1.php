
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test_2.php" method="post">
		<?php 
		ini_set('display_errors', 'on');
		include ('connect.php');
		$sex = $_POST['sex'];
 		$age = ($_POST['age']);
		if (isset($_POST['sex'])&& isset($_POST['age']));{
		$rez = mysql_query("SELECT * FROM `test_1` WHERE age='any' OR sex='$sex' OR age='$age'");
		while ($row = mysql_fetch_array ($rez)){
			echo "<input name=\"test_1\" type=\"radio\" value='".$row['test_1']."'>".$row['test_1']."</option>"."<br>";
		}
		}
		mysql_close();
		?>
		<br>
		<input type="submit" name="ok">
	</form>
</body>
</html>