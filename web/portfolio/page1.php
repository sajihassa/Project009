<?php
session_start();

	$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
	$objDB = mysql_select_db("portfolio");
	mysql_query("SET NAMES UTF8");


	// Check Exists ID
	$strSQL = "SELECT * FROM login_facebook WHERE FACEBOOK_ID = '".$_SESSION["strFacebookID"]."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		echo "Welcome to my Account<br><br>";
		echo "Facebook ID = ".$objResult["FACEBOOK_ID"];
		echo "<br><a href='".$objResult["LINK"]."' target='_blank'>
		<img src='".$objResult["PICTURE"]."' border='0'></a><br><br>";
		echo $objResult["NAME"];
	}

	echo "<br><br><br><a href='logout.php'>Logout</a>";
	mysql_close();
?>