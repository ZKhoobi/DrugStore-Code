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
//if(isset($_POST['cart'])){
session_start();
if(isset($_SESSION["itemNumber"]) && !empty($_SESSION['itemNumber']))
	$itemNumber = $_SESSION['itemNumber'];
else
	$itemNumber = 0;
die(msg($itemNumber,""));
//}
function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
?>