<?php
include("myDB_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2</title>
</head>

<body>
    <h1>
        <?php
        $greetings = "Hello, ";
        $guestUser = "World!";

        echo $greetings . $guestUser;
        ?>
    </h1>
</body>

</html>