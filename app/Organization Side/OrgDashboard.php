<?php

	//Used to get Information about organization to display on the Organization Dashboard, i.e. ID, NAME, LEADS, etc.
	include("config.php");
	include("orgLock.php");
	$myuserid=$_SESSION['user_id'];
		
	$sql="SELECT * FROM Organizations WHERE Org_UserID = '$myuserid'";   //PICK RECORD WHERE USERNAME IS THE ORGANIZER
	$result=mysql_query($sql);
		
		$orgID = mysql_result($result, 0, "Org_ID");  //GRABS THE DATA IN "COLUMN _NAME"(this is the title of the column) FROM CURRENT ROW FROM CURRENT QUERY
		$orgName=mysql_result($result, 0,"Org_Name");
		$orgWebsite=mysql_result($result,0,"Org_Website");
		$orgAddress=mysql_result($result,0,"Org_Address");
		$orgCity=mysql_result($result,0,"Org_City");
		$orgState=mysql_result($result,0,"Org_State");
		$orgZip=mysql_result($result,0,"Org_Zip");
		$orgCN=mysql_result($result,0,"Org_ContactName");
		$orgCP=mysql_result($result,0,"Org_ContactPhone");
		$orgCE=mysql_result($result,0,"Org_ContactEmail");
		$orgRequire=mysql_result($result,0,"Org_Requirements");
		$orgDesc=mysql_result($result,0,"Org_Desc");
		$orgLeads=mysql_result($result,0,"Org_LeadCount");
		$orgType=mysql_result($result,0,"Org_Type");

		echo "$orgID**$orgName**$orgWebsite**$orgAddress**$orgCity**$orgState**$orgZip**$orgLeads"; //WE CAN FORMAT THIS TO PRINT AS PRETTY AS WE WANT
		
?>