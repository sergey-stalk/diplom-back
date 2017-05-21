
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test_1.php" method="post">
		
		<select name="age">
		<?php
		include ("connect.php");
		$sex = $_POST['sex'];
 		$age = ($_POST['age']);

		$rez = mysql_query("SELECT * FROM `age` WHERE id < 8");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['age']."'>".$row['age']."</option>"."<br>";
		}
		
		?>
		</select>
		<br>
		<br>
		<?php
		$rez = mysql_query("SELECT * FROM `sex` WHERE sex!='any'");
		while ($row = mysql_fetch_array ($rez)){
			echo "<input name=\"sex\" type=\"radio\" value='".$row['sex']."'>".$row['sex']."</option>"."<br>";
		}
		mysql_close();
		?>
		<br>
		<br>
		<input type="submit" name="ok">
	</form>
</body>
</html>