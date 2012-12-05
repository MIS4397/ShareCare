<?php
	include("lock.php");
	session_start();
	
	$sql = "SELECT * FROM Events WHERE NOW() <= Event_Date ORDER BY RAND() LIMIT 0,1";
	$query = mysql_query($sql);
	$myeventID=mysql_result($query,0,"Event_ID");
	$_SESSION['event_id'] = $myeventID;
	echo $myeventID;
?>