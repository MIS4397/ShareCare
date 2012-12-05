<?php 
	include("config.php");
	include("orgLock.php");
	$sql = "SELECT * FROM Organizations WHERE Org_ID = '$org_id'";
	$query = mysql_query($sql);
	
	$i = 0;
	while($i < mysql_num_fields($query)){
		echo mysql_result($query, 0, $i)."**";
		$i++;
	}
?>