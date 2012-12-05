<?php
	include("config.php");
	session_start();
	
	$myeventID = $_SESSION['event_id'];
	
	$myeventname=addslashes($_POST['eventname']);
	$myeventdate=addslashes($_POST['eventdate']);
	$mydescription=addslashes($_POST['eventdesc']);
	$myeventtype=addslashes($_POST['eventtype']);
	$mystarttime=addslashes($_POST['eventstart']);
	$mystoptime=addslashes($_POST['eventend']);
	$mycontactname=addslashes($_POST['contactname']);
	$mycontactphone=addslashes($_POST['contactphone']);
	$mycontactemail=addslashes($_POST['contactemail']);
	$myaddress=addslashes($_POST['address']);
	$mycity=addslashes($_POST['city']);
	$mystate=addslashes($_POST['state']);
	$myzip=addslashes($_POST['zip']);
	$myeventduties=addslashes($_POST['duties']);
	$myeventrequirements=addslashes($_POST['requirements']);
 
	$sql = "UPDATE Events SET Event_Name = '$myeventname', Event_Date = '$myeventdate',
			Event_Address = '$myaddress', Event_City = '$mycity', Event_State = '$mystate',
			Event_Zip = '$myzip', Event_ContactName = '$mycontactname', Event_ContactPhone = '$mycontactphone',
			Event_ContactEmail = '$mycontactemail', Event_Description = '$mydescription', Event_StartTime = '$mystarttime',
			Event_EndTime = '$mystoptime', Event_Duties = '$myeventduties', Event_Requirements = '$myeventrequirements',
			Event_Type = '$myeventtype' WHERE Event_ID = '$myeventID'";
 
	mysql_query($sql) or die ("Error: ".mysql_error());
	
	echo "OK";
?>