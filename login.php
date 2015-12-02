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
//if(isset($_POST['lgin'])){
if(empty($_POST['usrname']) || empty($_POST['psw'])){
	die(msg(0,"لطفا نام کاربری و رمز عبور را وارد کنید."));
}
else{
	$query = mysql_query("SELECT * FROM member WHERE userName = '$_POST[usrname]' AND password = '$_POST[psw]' AND active = 0 ") or die(mysql_error());
	$row = mysql_fetch_array($query);
	if($row){
		session_start();
		$name = $row["name"];
		$familyName = $row["familyName"];
		$_SESSION['name']=$name;
		$_SESSION['family']=$familyName;
		$_SESSION['id']=$row['memberID'];
		$query = mysql_query("UPDATE member SET active = '1' WHERE userName = '$_POST[usrname]' AND password = '$_POST[psw]' ") or die(mysql_error());
		$temp = $name . ' ' . $familyName;
		die(msg(1, $temp));
	}
	else{
		die(msg(0,"نام کاربری یا رمز عبور اشتباه است."));
	}
}
//}
function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
?>