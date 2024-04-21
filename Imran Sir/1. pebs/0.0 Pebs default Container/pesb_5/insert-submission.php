<?php


	
	
	
	if(isset($_POST['submit_journal']))
	{		
	
	include('db_conn.php');
	$topic=$_POST['user-topic'];
	$author=$_POST['user-author'];
	$w_date = date('y/m/d');
	
	$keywords = $_POST['user-keywords'];
	
	$abstract=$_POST['user-abstract'];
	
	$user_id =$_POST['username'];
	
		//$qry1="SELECT `id` FROM `registered_users` WHERE `user_name`='$user_name'";
			//$run1 = mysqli_query($con,$qry1);
			//$data= mysqli_fetch_assoc($run1);
	//$user_id=$data['id'];
	
	$sts=0;
	
	$pht = $_FILES["myfile"];
	
	
	$pht2 = preg_replace("/ /","_",$_FILES['myfile']['name']);
	
	
	
	$journalname ="submissions/".$pht2;
	
		move_uploaded_file($pht['tmp_name'], "submissions/".$pht2);
	
	
	//$userfile = $_FILES['myfile'];
	//$userfile_name ="submissions/".$userfile['name'];	
	//move_uploaded_file($userfile['tmp_name'], "submissions/".$userfile['name']);
	
					$qry="INSERT INTO `submissions` (`id`, `topic`, `author`, `incep_date`, `key_words`, `abstract_matters`, `user_id`, `status`, `remarks`, `document_path`) 
					                         VALUES (NULL, '$topic', '$author', '$w_date', '$keywords', '$abstract', '$user_id', '0', 'rmk', '$journalname')";
	
					
						 
					$run = mysqli_query($con,$qry);
	
						if($run ==True)
		
	
							{ 
								?>
						
									<script> 
										var mywindow ="user_dashboard.php?id=" + "<?php echo $user_id ?>"; 
										alert('Submitted Successfully !!'); 
										window.open(mywindow)
									</script>
						
								<?php
							}
						else
							{ 
								?>
						
									<script> 
										alert('Something Went Wrong !!, Please Rename Your File Without Special Characters and Try Again or Contact Us !'); 
										var mywindow ="user_submission.php?id=" + "<?php echo $user_id ?>"; 
										
										window.open(mywindow)
									</script>
						
								<?php
							}
	
	
		
		
	}		
?>
