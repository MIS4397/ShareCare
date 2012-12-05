<?php
	include("config.php");
	include("lock.php");
	session_start();
	
	$myorgID = $_SESSION['org_id'];
	
	$sql = "SELECT * FROM Organizations WHERE Org_ID = '$myorgID'";
	$result = mysql_query($sql);
	
	//GRABS THE DATA IN "COLUMN _NAME"(this is the title of the column) FROM CURRENT ROW FROM CURRENT QUERY
	
	echo mysql_result($result, 0,"Org_Name")."**";
	echo mysql_result($result,0,"Org_Website")."**";
	echo mysql_result($result, 0,"Org_Address")."**";
	echo mysql_result($result, 0,"Org_City")."**";
	echo mysql_result($result, 0,"Org_State")."**";
	echo mysql_result($result,0,"Org_Type")."**";
	echo mysql_result($result,0,"Org_ContactName")."**";
	echo mysql_result($result,0,"Org_ContactPhone")."**";
	echo mysql_result($result,0,"Org_ContactEmail")."**";
	echo mysql_result($result,0,"Org_Desc")."**";
?>