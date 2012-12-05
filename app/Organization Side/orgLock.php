<?php
include('config.php');
session_start();

$user_check=$_SESSION['user_id'];

$org_id = $_SESSION['org_id'];

if(!isset($user_check))
{
	header("Location: index.html");
}
?>