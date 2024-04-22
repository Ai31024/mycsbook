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
	
	if(isset($_POST['managing_submit']))
	
	{
	$edt =$_POST['managing_input'];
	echo $edt;
	include('db_conn.php');
	
	$qry="UPDATE `eiditor` SET `editor_name` = '$edt' WHERE `eiditor`.`id` = 3";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
			
		
		{

		}
	else
	{
		echo "Error!";
	}
	}	
?>
