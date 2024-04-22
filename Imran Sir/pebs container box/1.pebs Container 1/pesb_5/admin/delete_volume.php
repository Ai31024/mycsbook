<?php

session_start();

	if($_SESSION['login_user'])
		
		{
			
		}
		
	else
	{
		header('location:../login_page.php');
	}
include('db_conn.php');
$qry="DELETE FROM `title` WHERE `title`.`id` ='$_GET[id]'";
$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
	
	{
		header('location:volume_panel.php');
	}
	else
		echo "Error!";
?>