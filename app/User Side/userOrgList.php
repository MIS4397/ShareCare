<?php
	include("config.php");
	include("lock.php");
	session_start();
	$myuserid=$_SESSION['login_user'];
	
	$sql="SELECT * FROM Organizations";   //STILL NEEDS DATE LOGIC AND FEATURED LOGIC
	$result=mysql_query($sql);
	
	$num=mysql_numrows($result);//GRABS NUMBER OF ROWS

	$i=0;
	while ($i < $num) //GETS CURRENT ROW IN TABLE AND MAKES SURE WE GO THROUGH ALL RECORDS
	{
		echo "<tr><td class='org'>";
		echo "<div hidden>".mysql_result($result,$i,"Org_ID")."</div>";
		echo "<p id='eventDate'>".mysql_result($result,$i,"Org_Website")."</p>";
		echo "<img src='images/defaultProf.png'></img>";
		echo "<p id='eventTD' style='font-size: 1.5em'>".mysql_result($result,$i,"Org_Name")."</p>";
		echo "<p id='eventTD'>".mysql_result($result,$i,"Org_Desc")."</p>";
		echo "</form></td></tr><hr>";

		$i++; //GO TO NEXT ROW
	}

?>