<?php

	if(isset($_POST['submit_volume']))
	
	{
	$w_date = date('y/m/d');
	
	$e_name=$_POST['volume'];
	
	$pub_date = $_POST['volume_date'];
	
	$yr_id = $_POST['yr'];
	
	
	$pht = $_FILES["myfile1"];
	
	
	$pht2 = preg_replace("/ /","_",$_FILES['myfile1']['name']);
	
	
	
	$journalname ="content_list/".$pht2;
	
	//echo $journalname;
	
		move_uploaded_file($pht['tmp_name'], "../content_list/".$pht2);
	
	include('db_conn.php');

	
	$qry="INSERT INTO `title` (`id`, `year_id`, `volume_name`, `publish_date`, `list_of_content_path`) VALUES (NULL, '$yr_id', '$e_name', '$pub_date','$journalname')";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
		
	
							{ 
								?>
						
									<script> 
										var mywindow ="volume_panel.php?id=" + "<?php $user_id ?>"; 
										alert('Volume Added Successfully !!'); 
										window.open((mywindow),'_self')
									</script>
						
								<?php
							}
						else
							{ 
								?>
						
									<script> 
										alert('Something Went Wrong !!, Please Try Again or Contact Us !'); 
										
									</script>
						
								<?php
							}
	
	}	
?>
