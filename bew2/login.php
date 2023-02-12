<!--starting with php code
-By Mohammad Azam Irshad-->
<?php

// including database connection file

include('db_conn.php');

// making sure the button is pressed so following instructions can start

if(isset($_POST['submit'])){ // if button-->"submit", "is set" then continue following instructions
    
    $username=trim($_POST['username']); // defining username and its identification in database
    
    $password=trim($_POST['password']); // defining password and its identification in database
    
    $qry_chk="SELECT * FROM accounts WHERE username='$username' AND password='$password'";// here we will create a variable that will search according to the following instruction within database. instructions are explained as follows, 'select' 'from' accounts <---this is name of table within database. 'where' username 'AND' password is assigned with respective variable in database.

    $run=mysqli_query($con, $qry_chk);// we create a variable whose work is to make query to "$con" (A variable from "db_conn.php") from "$qry_chk".

    $result=mysqli_num_rows($run);// we create this variable to execute a command which will get a number of row in a result
    if($result<1){ // if return value of $result is less than 1 (bool) then execute followings
        ?>
        <script>
            alert('Your username or password is incorrect');
            window.open('index.html', '_self');
        </script>
        
        <?php
    } else { // else execute this command
        ?>
        <script>
            alert('Welcome');
            window.open('welcome.html', '_self');
        </script>
        
        <?php
    } 
}
?>