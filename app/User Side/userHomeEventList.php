<?php
	include("config.php");
	include("lock.php");
	$myuserid=$_SESSION['login_user'];
	
	$sql="SELECT * FROM Events WHERE NOW() <= Event_Date";   //STILL NEEDS DATE LOGIC AND FEATURED LOGIC
	$result=mysql_query($sql);
	
	$num=mysql_numrows($result);//GRABS NUMBER OF ROWS

	echo $_SESSION['user_fn'].'<hr>';

	$i=0;
	while ($i < $num) //GETS CURRENT ROW IN TABLE AND MAKES SURE WE GO THROUGH ALL RECORDS
	{
		echo "<tr><td class='event'>";
		echo "<div hidden>".mysql_result($result,$i,"Event_ID")."</div>";
		echo "<p id='eventDate'>".mysql_result($result,$i,"Event_Date")."</p>";
		echo "<img src='".mysql_result($result,$i,"Event_TypePicture")."'></img>";
		echo "<p id='eventTD' style='font-size: 1.5em'>".mysql_result($result,$i,"Event_Name")."</p>";
		echo "<p id='eventTD'>".mysql_result($result,$i,"Event_Description")."</p>";
		echo "</form></td></tr><hr>";

		$i++; //GO TO NEXT ROW
	}

?>