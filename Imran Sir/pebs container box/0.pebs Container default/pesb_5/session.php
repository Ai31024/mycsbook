
<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
include ('db_conn.php');
//$conn = mysqli_connect("localhost", "root", "", "company"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 

// SQL Query To Fetch Complete Information Of User 
// $query =  "SELECT * FROM `user_names` WHERE `user_name`= '$user_check'";	

//$query = "SELECT username from login where username = '$user_check'"; 
//$ses_sql = mysqli_query($con, $query); 
//$row = mysqli_fetch_assoc($ses_sql); 
//$login_session = $row['user_name'];
$login_session = $user_check;

?>