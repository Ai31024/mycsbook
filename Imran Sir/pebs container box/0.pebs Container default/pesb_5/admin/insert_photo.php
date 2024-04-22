<?php
session_start();

	if($_SESSION['name'])
		
		{
			
		}
		
	else
	{
		header('location:adminlogin.php');
	}
	
	$title = $_POST['notice'];
	$current = date('y-m-d');
	$pht = $_FILES['myfile'];
	$photoname ="gallery/".$pht['name'];
	
		move_uploaded_file($pht['tmp_name'], "gallery/".$pht['name']);
	include('db_conn.php');
	$qry="INSERT INTO `gallery` (`id`, `title`, `image`) VALUES (NULL, '$title', '$photoname')";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
		
		
		{
		header('location:gallery_panel.php');
		}
	else
		echo "Error!";
	 
		
?>
