<?php
session_start();
//echo $_POST["hdnFbID"]."<br>";
//echo $_POST["hdnName"]."<br>";
//echo $_POST["hdnEmail"]."<br>";

	$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
	$objDB = mysql_select_db("portfolio");
	mysql_query("SET NAMES UTF8");


	// Check Exists ID
	$strSQL = "SELECT * FROM login_facebook WHERE FACEBOOK_ID = '".$_POST["hdnFbID"]."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		$_SESSION["strFacebookID"] = $objResult["FACEBOOK_ID"];
		header("location:page1.php");
		exit();
	}
	else
	{
		// Create New ID

			$strPicture = "https://graph.facebook.com/".$_POST["hdnFbID"]."/picture?type=large";
			$strLink = "https://www.facebook.com/app_scoped_user_id/".$_POST["hdnFbID"]."/";

			$strSQL ="  INSERT INTO  login_facebook (FACEBOOK_ID,NAME,EMAIL,PICTURE,LINK,CREATE_DATE)
				VALUES
				('".trim($_POST["hdnFbID"])."',
				'".trim($_POST["hdnName"])."',
				'".trim($_POST["hdnEmail"])."',
				'".trim($strPicture)."',
				'".trim($strLink)."',
				'".trim(date("Y-m-d H:i:s"))."')";
			$objQuery  = mysql_query($strSQL);

			$_SESSION["strFacebookID"] = $_POST["hdnFbID"];
			header("location:page1.php");
			exit();
	}

	mysql_close();
?>