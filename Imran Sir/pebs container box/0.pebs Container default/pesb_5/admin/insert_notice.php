<?php
session_start();

	if($_SESSION['name'])
		
		{
			
		}
		
	else
	{
		header('location:adminlogin.php');
	}
	
	$pname = $_POST['notice'];
	$current= date('y-m-d');
	$pht = $_FILES["myfile1"];
		
	$pht2 = preg_replace("/ /","_",$_FILES['myfile1']['name']);
		
	$journalname ="notice/".$pht2;
	
	//echo $journalname;
	
		move_uploaded_file($pht['tmp_name'], "../notice/".$pht2);
	include('db_conn.php');
	
	$qry="INSERT INTO `marquee` (`id`, `notice`, `INCEP_DATE`, `pdf_path`) VALUES (NULL, '$pname', '$current','$journalname')";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
		
		
		{
		header('location:notice_panel.php');
		}
	else
		echo "Error!";
	
		
?>
