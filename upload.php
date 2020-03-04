<?php

	$sqlcon=mysqli_connect("locahost","root","(db name will be here)");
	mysqli_select_db($sqlcon,"(db name will be here)");

	$v1=rendom(1111,9999);
	$v2=rendom(1111,9999);
	$v3=$v1.$v2;
	$v3=md5(v3)
	
	$fnm=$_FILES["fileToUpload"]["name"];
	$dst="./(folder name will be hare)".$v3.$fnm;
	$dst1="./(folder name will be hare)".$v3.$fnm;
	move_uploaded_file($_FILES["fileToUpload"]["temp_name"],$dst);
	
	mysql_query($sqlcon,"incert into product values('','$_POST[pname]','$_POST[pprice]','$_POST[pqua]','$_POST[pcatagory]','$_POST[pdes]')")
	
?>