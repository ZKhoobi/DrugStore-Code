<?php
//include ( 'register.html' );
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
	$query = "INSERT INTO member (memberID,userName,password,email,name,familyName,phoneNumber,address) VALUES ('','$userName','$password','$email','$name','$familyName','$phoneNumber','$address')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data){ 
		echo "ثبت نام با موفقیت انجام شد.";
		//echo json_encode(1);  
	} 
} 
function SignUp(){ 
	if(empty($_POST['rname']) || empty($_POST['rfname']) || empty($_POST['runame']) || empty($_POST['rpass']) || empty($_POST['rrpass']) || empty($_POST['rnumber'])|| empty($_POST['remail'])){
		echo "لطفا ابتدا فرم را تکمیل کرده سپس دکمه ثبت نام را فشار دهید.";
		//echo json_encode(2);
	}
	else if(($_POST['rpass'])!= ($_POST['rrpass'])){
		echo "لطفا رمز عبور را دوباره وارد کنید.";
		//echo json_encode(3);
	}
	else if(!empty($_POST['runame']) ){ //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
		$query = mysql_query("SELECT * FROM member WHERE userName = '$_POST[runame]' ") or die(mysql_error());
		if(!$row = mysql_fetch_array($query)){
			NewUser(); 
		} 
		else{ 
			echo "این نام کاربری قبلا استفاده شده است."; 
			//echo json_encode(4);
		} 
	}
} 
if(isset($_POST['registeration'])){ 
	SignUp(); 
} 
?>


