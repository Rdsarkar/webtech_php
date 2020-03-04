<?php

	session_start();

	$sqlcon=mysqli_connect("locahost","root","(db name will be here)");
	mysqli_select_db($sqlcon,"(db name will be here)");

	$query=mysqli_query($sqlcon,"select* user from a where userename='$_POST[username]','password=$POST[pass]'");
	
	while($row==mysqli_fetch_array($query))
	{
		$_SESSION["valid"]="yes";
		$_SESSION["user"]=$row["username"];
		header("Location:home.php");
	}




?>
