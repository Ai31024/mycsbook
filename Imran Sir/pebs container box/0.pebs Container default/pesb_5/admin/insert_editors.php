<?php

	
	$w_date = date('y/m/d');
	
	$e_name=$_POST['notice'];
	
	$post_name = $_POST['Ptype'];
	
	include('db_conn.php');
	
	
	
	
	$qry="INSERT INTO `eiditor` (`id`, `post_name`, `editor_name`) VALUES (NULL, '$post_name', '$e_name');";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
	
		{ 
								?>
						
									<script> 
										var mywindow ="editorial_panel.php?id=" + "<?php $user_id ?>"; 
										alert('Uploaded Successfully !!'); 
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
	
		
?>
