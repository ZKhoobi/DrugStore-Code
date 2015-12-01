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

function NewUser(){ 
	$address = '';
	$name = $_POST['rname']; 
	$familyName = $_POST['rfname']; 
	$email = $_POST['remail'];
	$userName = $_POST['runame']; 
	$password = $_POST['rpass']; 
	$phoneNumber = $_POST['rnumber'];
	$active = '0';
	$query = "INSERT INTO member (memberID,active,userName,password,email,name,familyName,phoneNumber,address) VALUES ('',$active,'$userName','$password','$email','$name','$familyName','$phoneNumber','$address')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data){ 
		die(msg(1,"ثبت نام با موفقیت انجام شد."));
	} 
} 
function SignUp(){ 
	if(empty($_POST['rname']) || empty($_POST['rfname']) || empty($_POST['runame']) || empty($_POST['rpass']) || empty($_POST['rrpass']) || empty($_POST['rnumber'])|| empty($_POST['remail'])){
		die(msg(0,"لطفا ابتدا فرم را تکمیل کرده سپس دکمه ثبت نام را فشار دهید."));
	}
	if(!(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $_POST['remail']))){
		die(msg(0,"آدرس ایمیل نامعتبر است."));
	}
	if(($_POST['rpass'])!= ($_POST['rrpass'])){
		die(msg(0,"لطفا رمز عبور را دوباره وارد کنید."));
	}
	
	if(!empty($_POST['runame']) ){ //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
		$query = mysql_query("SELECT * FROM member WHERE userName = '$_POST[runame]' ") or die(mysql_error());
		if(!$row = mysql_fetch_array($query)){
			NewUser(); 
		} 
		else{  
			die(msg(0,"این نام کاربری قبلا استفاده شده است."));
		} 
	}
} 
//if(isset($_POST['registeration']))
SignUp(); 
function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
} 
?>


