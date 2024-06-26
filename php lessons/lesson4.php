<?php
include("myDB_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4</title>
</head>

<body>
    <h1>
        <?php
        $book1 = "The Alchemist";
        $book2 = "The Bloodline";
        $book3 = "Spy The Lie";

        echo "I have read $book1 but I still have to read $book2 and $book3.";
        ?>
    </h1>
</body>

</html>