<?php

//PART1: ESTABLISHING CONNECTION WITH MYSQL
include('db_conn.php');

//PART2: BUTTON PRESS FUNCTION AND ENTRY CHECKING
if(!isset($_POST['username'], $_POST['password'], $_POST['email'])){
	exit('Please complete the registration form');
}

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
	exit('Please complete the registration form');
}

//PART3: CHECKING VALIDITY OF EMAIL, USERNAME AND PASSWORD
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	exit('Email is not valid!');
}
if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0){
	exit('Username is not valid!');
}
if(strlen($_POST['password']) >20 || strlen($_POST['password']) < 5){
	exit('Password must be between 5 and 20 characters long!');
}

//PART4: CHECKING FOR UNIQUE USERNAME
if($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')){
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	if($stmt->num_rows > 0){
		echo 'Username already exists, please choose another!';
	} else {
		
		//PART4.5: PROCEED TO CREATE ACCOUNT
		if($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)' )){
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
			$stmt->execute();
			?>
			<script>
            alert('Sign Up successful');
            window.open('SPcomplete.html', '_self');
        	</script>
			<?php
		} else{
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
} else{
	echo 'Could not prepare statement!';
}
$con->close();
?>