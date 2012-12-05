<?php
	include("config.php");
	
	$myorg_ID = $_POST["org_id"];
	
	$myorgname=addslashes($_POST['orgname']);
	$mywebsite=addslashes($_POST['website']);
	$myaddress=addslashes($_POST['address']);
	$mycity=addslashes($_POST['city']);
	$mystate=addslashes($_POST['state']);
	$myzip=addslashes($_POST['zip']);
	$mycontactname=addslashes($_POST['contactname']);
	$mycontactphone=addslashes($_POST['contactphone']);
	$mycontactemail=addslashes($_POST['contactemail']);
	$mydesc=addslashes($_POST['desc']);
	$myorgtype=addslashes($_POST['orgtype']);
 
	$sql = "UPDATE Organizations SET Org_Name = '$myorgname', Org_Website = '$mywebsite',
			Org_Address = '$myaddress', Org_City = '$mycity', Org_State = '$mystate', 
			Org_Zip = '$myzip', Org_ContactName = '$mycontactname',
			Org_ContactPhone = '$mycontactphone', Org_ContactEmail = '$mycontactemail',
		    Org_Desc = '$mydesc', Org_Type = '$myorgtype' WHERE Org_ID = '$myorg_ID'";
 
	mysql_query($sql) or die ("Error: ".mysql_error());
	
	echo "OK";
	//header("Location: orgSuccess.html");
?>