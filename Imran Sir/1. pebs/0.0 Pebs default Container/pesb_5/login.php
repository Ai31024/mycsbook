<?php
session_start();
	include('db_conn.php');
		
if(isset($_POST['login']))
{
	$username = $_POST['email-login'];
	$password = $_POST['password-login'];
	
	
	
	$qry="SELECT registered_users.id, registered_users.user_name, registered_users.user_mail, registered_users.user_password, registered_users.access_level, dash_boards.dash_board_name from registered_users INNER JOIN dash_boards ON registered_users.access_level = dash_boards.access_level WHERE `user_mail`= '$username' AND `user_password`='$password' ";
	
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if($row <1)
		
		{ 
			?>
			
			<script> 
				alert('Username or Password Incorrect !!'); 
				window.open('login_page.php','_self')
			</script>
			
			<?php
		}
		
		else
		
		{
			$data= mysqli_fetch_assoc($run);
			$user= $data['user_name'];
			
				
			echo "id =".$id;
			
			$_SESSION['login_user']=$user;
			
			$dashboard = $data['dash_board_name'].'?id='.$data['id'];
			
			echo $dashboard;
			header('location:'.$dashboard);
			
		}
}
?>
