<?php
    //Стартуем сессии
 session_start();
 $host = $_SERVER['HTTP_HOST'];
 include ('connect.php');
$data = $_POST;
if (isset($data['login_in'])){
		$host = $_SERVER['HTTP_HOST'];
		$uri = (dirname($_SERVER['PHP_SELF']));
		$login = strip_tags($_POST['login']);
		$pass = strip_tags($_POST['pass']);
		$rez = mysql_query("SELECT * FROM `login`");
		$row = mysql_fetch_array ($rez);
		if ($login === $row['login'] && $pass === $row['pass']) {
    		header("Location: http://deplom.loc/admin.php");
	    		}
	    		else {
    			echo "Не верные данные";
					}
		}
		
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
// Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    
?>
	<form method="post"action="login.php">
		<label for="login">Логин</label>
		<input type="login" name="login">
		<label for="pass">Пароль</label>
		<input type="password" name="pass">
		<input type="submit" name="login_in" value="Войти">
	</form>
<?php
}
$_SESSION['logget']	= $login;	
?>
 		
</body>
</html>