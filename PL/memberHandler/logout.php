<?php
$host="localhost";
$user="root";
$password="";
$database="drugstore";
$connection=mysql_connect($host,$user,$password);

mysql_query("SET NAMES 'utf8'", $connection);
mysql_query("SET CHARACTER SET 'utf8'", $connection);
mysql_query("SET character_set_connection = 'utf8'", $connection);

mysql_select_db($database);
//if(isset($_POST['in'])){
session_start();
$query = mysql_query("SELECT * FROM member WHERE memberID = '$_SESSION[id]' ") or die(mysql_error());
$row = mysql_fetch_array($query);
if($row["active"]==1)
{
	$id = $_SESSION['id'];
	$query = mysql_query("UPDATE member SET active = '0' WHERE memberID = '$id' ") or die(mysql_error());
	session_destroy();
	die(msg(1, "حساب شخصی"));
}
//}
function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
?>