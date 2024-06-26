<?php
include("myDB_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3</title>
</head>

<body>
    <h1>
        <?php
        $book = "The Alchemist";
        $read = false;
        if ($read == true) {
            $status = "You have read $book.";
            echo $status;
        } else {
            $status = "You have not read $book.";
            echo $status;
        }
        ?>
    </h1>
</body>

</html>