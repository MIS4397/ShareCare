<?php
	include("config.php");	//Establishes DB connection
	session_start();	//Begins session so we can pass around username
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//username and password sent from Form
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];

		$sql="SELECT User_ID, User_FirstName FROM Users WHERE User_Email='$myusername' and User_Password='$mypassword'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		$myuserid=mysql_result($result, 0, "User_ID");
		$myuserfn=mysql_result($result, 0, "User_FirstName");


		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
		{
			$checkOrg="SELECT User_IsOrg FROM Users WHERE User_ID='$myuserid'";
			$result=mysql_query($checkOrg);
			$isOrg=mysql_result($result, 0);
			
				if($isOrg==true)
				{
					$sql="SELECT Org_ID FROM Organizations WHERE Org_UserID = '$myuserid'";
					$result = mysql_query($sql);
					$myorgid = mysql_result($result, 0, "Org_ID");
					$_SESSION['user_id']=$myuserid;	
					$_SESSION['org_id']=$myorgid;
					header("location: orgDash.html");
				}
				else
				{
					$_SESSION['user_id']=$myuserid;
					$_SESSION['user_fn']=$myuserfn;
					header("location: userHome.html");
				}
		}
		else
		{
			echo "ERROR";
		}
	}
?>