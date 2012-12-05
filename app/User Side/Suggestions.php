<?php
	include("config.php");
	
	$myuserid=$_SESSION['login_user'];
	
	$sql="SELECT Event_Type, COUNT(*) FROM Likes WHERE Like_UserID='myuserid' ORDER BY Event_Type";
	$result=mysql_query($sql);
	$myfavoritetype=mysql_result($result,0,"Event_Type");
	
	$sql2="SELECT * FROM Events WHERE Event_Type='$myfavoritetype'";
	$result2=mysql_query($sql2);
	
	$num=mysql_numrows($result2);//GRABS NUMBER OF ROWS

	$i=0;
	while ($i < $num) //GETS CURRENT ROW IN TABLE AND MAKES SURE WE GO THROUGH ALL RECORDS
	{
		echo "<tr><td id='eventList'>";
		echo "<form action='EditEvent.php' method='POST'>";
		echo "<p id='eventTableDate'>".mysql_result($result2,$i,"Event_Date")."</p>";
		echo "<img src='defaultProf.png' id='eventTablePic'></img>";
		echo "<p id='eventTableHd'>".mysql_result($result2,$i,"Event_Name")."</p>";
		echo "<p id='eventTableDesc'>".mysql_result($result2,$i,"Event_Description")."</p>";
		echo "<input id='uni_ID' name='event_id' type='hidden' value='".mysql_result($result2,$i,"Event_ID")."' hidden>";
		echo "</form></td></tr><hr>";

		$i++; //GO TO NEXT ROW
	}
	
?>