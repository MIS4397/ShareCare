<?php
include('config.php');
session_start();
$user_check=$_SESSION['user_id'];

$ses_sql=mysql_query("select User_ID from Users where User_ID='$user_check'");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['User_ID'];

if(!isset($login_session))
{
	header("Location: index.html");
}
?>