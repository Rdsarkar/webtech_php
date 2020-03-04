<?php

$cred=array();
$file=fopen("data.txt","r") or die("file error");

while($c=fgets($file)){
	
	$ar=explode("-",$c);
	$cred[$ar[3]]=$ar[4];
}
$flag=0;
foreach($cred as $k=>$v){
	if($_POST["username"]==$k && md5($_POST["pass"])==$v){
		
		
		echo "Login success";
		header("location:home.html");
		$flag=1;
		break;
		
	}
}
if($flag==0)
	echo "<p style='color:red'>Wrong credentials</p>";


?>

