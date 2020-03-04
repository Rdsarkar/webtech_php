<?php

	session_start();

	$sqlcon=mysqli_connect("locahost","root","(db name will be here)");
	mysqli_select_db($sqlcon,"(db name will be here)");

	$query=mysqli_query($sqlcon,"select* from admin where userename='$_POST[aname]','password=$POST[apass]'");
	
	while($row==mysqli_fetch_array($query))
	{  
		$_SESSION["valid"]="yes";
		$_SESSION["admin"]=$row["username"];
		header("Location:admin.php");
	}




?>
