<?php

session_start();

	if($_SESSION['name'])
		
		{
			
		}
		
	else
	{
		header('location:adminlogin.php');
	}
include('db_conn.php');
$qry="DELETE FROM marquee where id='$_GET[id]'";
$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
	
	{
		header('location:notice_panel.php');
	}
	else
		echo "Error!";
?>