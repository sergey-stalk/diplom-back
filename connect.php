<?php
$connection = mysql_connect ("localhost", "root", "1234");
$db = mysql_select_db("db");
mysql_query("SET NAMES 'utf-8' ");
if (!$connection || !$db)
{
	exit(mysql_error());
}
	
	
?>
