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
//die(msg(0,$_POST["pname"]));
if(!empty($_POST["pname"]) && !empty($_POST["pcode"]) && !empty($_POST["pprice"]) && !empty($_POST["pcateg"]))
{

	if(is_array($_FILES)) 
	{
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) 
		{
			$name = $_POST['pname'];
			$price = $_POST['pprice'];
			$category = $_POST['pcateg'];
			$code = $_POST['pcode'];
			if($category==1)
			{
				$str="arayeshi";
			}
			else if($category==2)
			{
				$str="tajhizat";
			}
			else if($category==3)
			{
				$str="behdashti";
			}
			else if($category==4)
			{
				$str="ortopedy";
			}
			else if($category==5)
			{
				$str="mokamel";
			}
			$sourcePath = $_FILES['userImage']['tmp_name'];
			$targetPath = "images/".$str."/".$_FILES['userImage']['name'];
			if(move_uploaded_file($sourcePath,$targetPath)) 
			{
				$query = "INSERT INTO products (id,name,code,image,price,categoryId) VALUES ('',$name,'$code','$targetPath','$price','$category')"; 
				$data = mysql_query ($query)or die(mysql_error()); 
				if($data){ 
					die(msg(1,"عملیات افزودن کالا با موفقیت انجام شد."));
				} 
					?>
				<img src="<?php echo $targetPath; ?>" width="100px" height="100px" />
				<?php
			}
			
		}
	}
}
else
{
	die(msg(0,"لطفا مشخصات کالا را کامل وارد کنید."));
}
function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
// //if(isset($_POST['lgin'])){
// if(empty($_POST['usrname']) || empty($_POST['psw'])){
	// die(msg(0,"لطفا نام کاربری و رمز عبور را وارد کنید."));
// }
// else{
	// $query = mysql_query("SELECT * FROM member WHERE userName = '$_POST[usrname]' AND password = '$_POST[psw]' AND active = 0 ") or die(mysql_error());
	// $row = mysql_fetch_array($query);
	// if($row){
		// session_start();
		// $name = $row["name"];
		// $familyName = $row["familyName"];
		// $_SESSION['name']=$name;
		// $_SESSION['family']=$familyName;
		// $_SESSION['id']=$row['memberID'];
		// $_SESSION['email']=$row['email'];
		// $_SESSION['number']=$row['phoneNumber'];
		// $_SESSION['username']=$row['userName'];
		// $query = mysql_query("UPDATE member SET active = '1' WHERE userName = '$_POST[usrname]' AND password = '$_POST[psw]' ") or die(mysql_error());
		// $temp = $name . ' ' . $familyName;
		// if($_POST["usrname"]=="admin")
			// die(msg(2, $temp));
		// else
			// die(msg(1, $temp));
	// }
	// else{
		// die(msg(0,"نام کاربری یا رمز عبور اشتباه است."));
	// }
// }
// //}
?>