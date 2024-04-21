<?php

	
	$w_date = date('y/m/d');
	
	$user_name=$_POST['namelogin'];
	$user_email = $_POST['email-login'];
	$user_pass1=$_POST['password-login'];
	$user_pass2=$_POST['password-confirm'];
	
	
	
	if($user_pass1 <> $user_pass2)
	
	
		{ 
			?>
			
				<script> 
					alert('Password and Confirm Password Not Matched !!'); 
					window.open('user-register.php','_self')
				</script>
			
			<?php
		}
	
	else	
		include('db_conn.php');
	
			$qry1="SELECT `user_mail` FROM `registered_users` WHERE `user_mail`='$user_email'";
			$run1 = mysqli_query($con,$qry1);
			
			$row = mysqli_num_rows($run1);
				
				if($row >0)
					
				{ 
					?>
			
						<script> 
							alert('User Already Registered !!'); 
							window.open('user-register.php','_self')
						</script>
			
					<?php
				}
									
				else				
	
					$qry="INSERT INTO `registered_users` (`id`, `user_name`, `user_mail`, `user_password`, `register_date`,access_level) VALUES (NULL,'$user_name', '$user_email', '$user_pass1','$w_date','user')";
	
					$run = mysqli_query($con,$qry);
	
						if($run ==True)
		
	
							{ 
								?>
						
									<script> 
										alert('User Registered Successfully !!'); 
										window.open('login_page.php','_self')
									</script>
						
								<?php
							}
						else
							{ 
								?>
						
									<script> 
										alert('Something Went Wrong !!, Please Try Again or Contact Us !'); 
										window.open('user-register.php','_self')
									</script>
						
								<?php
							}
	
	
		
		
			
?>
