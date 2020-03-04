<?php
function char_at($str, $pos)
{
  return $str{$pos};
}
if(strlen($_POST['password'])==0 || strlen($_POST['firstname'])==0 || strlen($_POST['lastname'])==0 || strlen($_POST['uname'])==0 || strlen($_POST['email'])==0 )
{
	echo "Must Fill your form<br>" ;
}
else if (strlen($_POST['password'])<8)
{
	echo "password must contain 8 characters";
}
else if($_POST['password']!=$_POST['confirmpass'])
{
	echo "Password do not match";
}
else
{
	
if(strlen($_POST['email'])==0)
{
	echo "Email Address is empty <br>";
}
else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	echo "Invalid Email";
}
else
{echo "<p style='color:blue'> Succesfully Login </p> <br><br>" ;
	if(strlen($_POST['firstname'])==0)
{
	echo "First Name is empty <br>" ;
}

if(strlen($_POST['lastname'])==0)
{
	echo "Last Name is empty <br>";
}

if(strlen($_POST['uname'])==0)
{
	echo "User name is empty <br>";
}

	

	
}
if($_POST["password"]==$_POST["confirmpass"])
{
	$file=fopen('data.txt','a') or die("fle open error");
	fwrite($file,"\r\n");
	fwrite($file,$_POST["firstname"]);
	fwrite($file,"-");
	fwrite($file,$_POST["lastname"]);
	fwrite($file,"-");
	fwrite($file,$_POST["email"]);
	fwrite($file,"-");
	fwrite($file,$_POST["uname"]);
	fwrite($file,"-");
	fwrite($file,md5($_POST["password"]));

	echo " Sign Up succeassful";
	
	header("location:login.html");

}

	
}
?>
	
<?php 

?>

