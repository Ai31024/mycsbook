<?php

		
		
		if(isset($_POST['feedback'])){
			
				$name=$_POST['name_input'];
				$phone=$_POST['mobile_input'];				
				$email=$_POST['mail_input'];
				$message=$_POST['message_input'];
				
				
			
			require'PHPMailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth=true;
			$mail->SMTPSecure='tls';
			$mail->Username='pesbjournals@gmail.com';
			$mail->Password='Admin@12345';
			
			$mail->setFrom('pesbjournals@gmail.com', 'ENQUIRY');
			$mail->addAddress('mailpesb@gmail.com', 'ADMIN');
			$mail->addReplyTo('mailpesb.com', 'REPLY');
			
			$mail->isHTML(true);
			$mail->Subject ="Enquiry From: $name";
			$mail->Body="You have received enquiry from: ".
	"<br> Name: $name \n <br> Phone: $phone \n <br> email: $email \n <br> Message: $message"; 
			
			
			if(!$mail->send()){
			
				echo "Something Went Wrong.";
					
			}
			
			else{
					include('db_conn.php');
					$current = date('y-m-d H:i:s');
				
					$qry="INSERT INTO `feedback` (`id`, `c_name`, `mobile_no`, `email`, `message`, `message_date`) VALUES (NULL, '$name', '$phone', '$email', '$message', '$current');";
				
					$run = mysqli_query($con,$qry);
				
				?>
				
				<script>
						alert("Thank You for contacting us!, We will get back to you soon if required.");
						window.location.href = "index.php";
				</script>
				<?php
				
				
			}
		
		}

?>

