<?php
	include("config.php");
	include("lock.php");
	session_start();
	
	$myeventID = $_SESSION['event_id'];			//$_POST("Event_ID");
	
	$sql = "SELECT * FROM Events, Organizations WHERE Event_ID = '$myeventID' AND Org_ID = Event_OrgID";
	$result = mysql_query($sql);
	
	//GRABS THE DATA IN "COLUMN _NAME"(this is the title of the column) FROM CURRENT ROW FROM CURRENT QUERY
	
	echo mysql_result($result, 0,"Event_Name")."**";
	echo mysql_result($result,0,"Org_Name")."**";
	echo mysql_result($result, 0,"Event_Address")."**";
	echo mysql_result($result, 0,"Event_City")."**";
	echo mysql_result($result, 0,"Event_State")."**";
	echo mysql_result($result,0,"Event_Date")."**";
	echo mysql_result($result,0,"Event_Type")."**";
	echo mysql_result($result,0,"Event_ContactName")."**";
	echo mysql_result($result,0,"Event_ContactPhone")."**";
	echo mysql_result($result,0,"Event_ContactEmail")."**";
	echo mysql_result($result,0,"Event_Description")."**";
	echo mysql_result($result,0,"Event_Requirements")."**";
	echo mysql_result($result,0,"Event_Duties")."";
?>