<?php
session_start();

	if($_SESSION['login_user'])
		
		{
			
		}
		
	else
	{
		header('location:../index.php');
	}
	?>
	
	<?php
	
	$edt =$_POST['editor_input'];
	echo $edt;
	include('db_conn.php');
	
	$qry="UPDATE `eiditor` SET `editor_name` = '$edt' WHERE `eiditor`.`id` = 1";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
			
		
		{
		header('location:editorial_panel.php');
		}
	else
	{
		echo "Error!";
	}
		
?>
