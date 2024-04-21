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
	
						$qry="SELECT max(`year`) FROM `year_names`";
	
	
						$run = mysqli_query($con,$qry);
						$data= mysqli_fetch_row($run);
	
						$new_year= $data[0] + 1;
	
						mysqli_close($con);
						
						include('db_conn.php');
	
						$qry="INSERT INTO `year_names` (`id`, `year`) VALUES (NULL, '$new_year');";
	
	
						$run = mysqli_query($con,$qry);
						mysqli_close($con);
	
						
	
	if($run ==True)
		
	
	{
		header('location:year_panel.php');
	}
	else
		echo "Error!";
?>