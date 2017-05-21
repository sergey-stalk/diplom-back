<?php
session_start();
if ($_SESSION['logget'] != root) 
	header('location: http://deplom.loc/login.php');
ini_set('display_errors', 'on');
include ('connect.php');
$sex = $_POST['sex'];
$age = ($_POST['age']);
$test_1 = strip_tags(trim($_POST['test_1']));
$test_2 = strip_tags(trim($_POST['test_2']));
$test_3 = strip_tags(trim($_POST['test_3']));
$pre_result = strip_tags(trim($_POST['pre_result']));
$article = (trim($_POST['article']));
$delete_test_1 = ($_POST['delete_test_1']);
$delete_test_2 = ($_POST['delete_test_2']);
$delete_test_3 = ($_POST['delete_test_3']);
$delete_pre_result = ($_POST['delete_pre_result']);
$delete_article = ($_POST['delete_article']);

/*ОБРОБОТЧИК РЕДИРЕКТА ДОБАВЛЕНИЯ*/


  if (!empty($_POST["test_1"])) {
    $_SESSION["test_1"] = $_POST["test_1"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }
   if (!empty($_POST["test_2"])) {
    $_SESSION["test_2"] = $_POST["test_2"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
 }
  if (!empty($_POST["test_3"])) {
    $_SESSION["test_3"] = $_POST["test_3"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }

   if (!empty($_POST["pre_result"])) {
    $_SESSION["pre_result"] = $_POST["pre_result"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }

   if (!empty($_POST["article"])) {
    $_SESSION["article"] = $_POST["article"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }

  /*ОБРАБОТЧИК РЕДИРЕКТА УДАЛЕНИЯ*/

  if (!empty($_POST["delete_test_1"])) {
    $_SESSION["delete_test_1"] = $_POST["delete_test_1"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }

    if (!empty($_POST["delete_test_2"])) {
    $_SESSION["delete_test_2"] = $_POST["delete_test_3"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }
    if (!empty($_POST["delete_test_3"])) {
    $_SESSION["delete_test_3"] = $_POST["delete_test_3"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }
    if (!empty($_POST["delete_pre_result"])) {
    $_SESSION["delete_pre_result"] = $_POST["delete_pre_result"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }
    if (!empty($_POST["delete_article"])) {
    $_SESSION["delete_article"] = $_POST["pre_result"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    
  }
 
 /*ОБРАБОТЧИК ФОРМ ДОБАВЛЕНИЯ*/

if (isset($_POST['sex'])&& isset($_POST['age'])&& isset($_POST['test_1'])){
		mysql_query ("
				INSERT INTO test_1 (`sex`, `age`,`test_1`) VALUES ('$sex', '$age','$test_1')
");
	echo "<br>Запись".$test_1." добавлена";
} 
if (isset($_POST['test_1'])&& isset($_POST['test_2'])){
		mysql_query ("
				INSERT INTO `test_2` (`id`, `test_1`, `test_2`) VALUES (NULL, '$test_1', '$test_2');
");
	echo "<br>Запись добавлена";
} 
if (isset($_POST['test_2'])&& isset($_POST['test_3'])){
		mysql_query ("
				INSERT INTO `test_3` (`id`, `test_2`, `test_3`) VALUES (NULL, '$test_2', '$test_3')
");
	echo "<br>Запись добавлена";
} 
if (isset($_POST['test_3'])&& isset($_POST['pre_result'])){
		mysql_query ("
				INSERT INTO `pre_result` (`id`, `test_3`, `pre_result`) VALUES (NULL, '$test_3', '$pre_result')
");
	echo "<br>Запись добавлена";
} 
if (isset($_POST['pre_result'])&& isset($_POST['article'])){
		mysql_query ("
				INSERT INTO `article` (`id`, `pre_result`, `article`) VALUES (NULL, '$pre_result', '$article')
");
	echo "<br>Статья добавлена";
} 

/*ОБРАБОТЧИК УДАЛЕНИЯ*/

if (isset($delete_test_1)){
		mysql_query ("
				DELETE FROM `test_1` WHERE `test_1`.`test_1` = '$delete_test_1';
"); 
	echo "<br>Критерий перовго уровня ".$delete_test_1." удален";
} 

if (isset($delete_test_2)){
		mysql_query ("
				DELETE FROM `test_2` WHERE `test_2`.`test_2` = '$delete_test_2';
");
	echo "<br>Критерий второго уровня ".$delete_test_2." удален";
} 

if (isset($delete_test_3)){
		mysql_query ("
				DELETE FROM `test_3` WHERE `test_3`.`test_3` = '$delete_test_3';
");
	echo "<br>Критерий третьего уровня ".$delete_test_3." удален";
} 

if (isset($delete_pre_result)){
		mysql_query ("
				DELETE FROM `pre_result` WHERE `pre_result`.`pre_result` = '$delete_pre_result';
");
	echo "<br>Название статьи ".$pre_result." удалено";
} 
if (isset($delete_article)){
		mysql_query ("
				DELETE FROM `article` WHERE `pre_result` = '$delete_article';
");
	echo "<br>Статья ".$pre_result." удалена ";
} 
mysql_close();
echo $delete_article;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Кабинет админестратора</title>
</head>
<body>

<!--Форма отправки test_1-->
	<h1>Кабинет администратора</h1>
	
	<h2>Добавление</h2>
	
	<p>Введите критерий первого уровня</p>
	<br>
	<form action="admin.php" method="post">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM `sex` ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<input name=\"sex\" type=\"radio\" value='".$row['sex']."'>".$row['sex']."</option>"."<br>";
		}
			mysql_close();
		?>
		<select name="age">
		<?php
			include ('connect.php');
		$rez = mysql_query("SELECT * FROM age ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['age']."'>".$row['age']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<input type="text" name="test_1">
		<br>
		<input type="submit" name="ok">
	</form>

<!--Форма отправки test_2-->
	<hr>
	<p>Введите критерий второго уровня</p>
	<br>
	<form action="admin.php" method="post">
		<select name="test_1">
		<?php
		include ("connect.php");
		$rez = mysql_query("SELECT * FROM test_1 ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['test_1']."'>".$row['test_1']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<input type="text" name="test_2">
		<br>
		<input type="submit" name="ok">
		<br>
	</form>
	
<!--Форма отправки test_3-->
	<hr>
	<p>Введите критерий третьего уровня</p>
	<br>
	<form action="admin.php" method="post">
		<select name="test_2">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM test_2 ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['test_2']."'>".$row['test_2']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<input type="text" name="test_3">
		<br>
		<input type="submit" name="ok">
		<br>
	</form>

<!--Форма отправки pre_result-->

	<hr>
	<p>Введите название статьи</p>
	<br>
	<form action="admin.php" method="post">
		<select name="test_3">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM test_3 ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['test_3']."'>".$row['test_3']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<input type="text" name="pre_result">
		<br>
		<input type="submit" name="ok">
		<br>
	</form>

	<!--Форма отправки article-->
	
	<hr>
	<p>Введите статью</p>
	<br>
	<form action="admin.php" method="post">
		<select name="pre_result">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM pre_result ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['pre_result']."'>".$row['pre_result']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select><br>
		<br>
		<textarea name="article" id="" cols="50" rows="20"></textarea>
		<br>
		<input type="submit" name="ok">
		<br>
	</form>

	


	
	<br><br>
	
	<br>
	<h2>Удаление</h2>
	<h4>Внимание Удаление критерия происходит только в том случае, если все записи потомки этого критерия были удалены<br>Рекомендуем производить удаление начиная с конца</h3>
	<!--Удаление критерия test_1-->
		<p>Выберите критерий первого который необходимо удалить</p>
		<form action="admin.php" method="post">
		<select name="delete_test_1">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM test_1 ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['test_1']."'>".$row['test_1']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<br>
		<br>
		<input type="submit" name="ok" value="Удалить">
		<br>
	</form>
	<br>


	<p>Выберите критерий второго уровня который необходимо удалить</p>
	<form action="admin.php" method="post">
		<select name="delete_test_2">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM test_2 ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['test_2']."'>".$row['test_2']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<br>
		<br>
		<input type="submit" name="ok" value="Удалить">
		<br>
	</form>
	<br>
	<p>Выберите критерий Третьего уровня который необходимо удалить</p>

	<form action="admin.php" method="post">
		<select name="delete_test_3">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM test_3 ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['test_3']."'>".$row['test_3']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<br>
		<br>
		<input type="submit" name="ok" value="Удалить">
		<br>
	</form>
	<br>
	<p>Выберите название статьи которое необходимо удалить</p>
	<form action="admin.php" method="post">
		<select name="delete_pre_result">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM pre_result ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['pre_result']."'>".$row['pre_result']."</option>"."<br>";
		}
			mysql_close();
		?>
		</select>
		<br>
		<br>
		<input type="submit" name="ok" value="Удалить">
		<br>
	</form>
	<br>
	<p>Выберите название статьи которую необходимо удалить</p>
	<form action="admin.php" method="post">
		<select name="delete_article">
		<?php
		include ('connect.php');
		$rez = mysql_query("SELECT * FROM article ");
		while ($row = mysql_fetch_array ($rez)){
			echo "<option value='".$row['pre_result']."'>".$row['pre_result']."</option>"."<br>";
		}
			mysql_close();

		?>
		</select>
		<br>
		<br>
		<input type="submit" name="ok" value="Удалить">
		<br>
	</form>
	<br>
	<a href="show_article.php">Простотреть существующие статьи</a>
	<br>
	<a href="logout.php">Выйти</a>
</body>
</html>