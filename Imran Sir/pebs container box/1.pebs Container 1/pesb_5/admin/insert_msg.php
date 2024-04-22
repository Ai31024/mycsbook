<?php


	$current = date('y-m-d H:i:s');
	$pname = $_POST['author'];
	$email = $_POST['email'];
	$ph = $_POST['phone'];
	$message = $_POST['comment'];
	
	
	
	
	include('db_conn.php');
	
	$qry="INSERT INTO `enquary` (`id`, `in_date`, `name`, `email`, `phone`, `msg`) VALUES (NULL, '$current', '$pname','$email','$ph','$message')";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
		
		
		{
		header('location:contact.php');
		}
	else
		echo "Error!";
	
		
?>
