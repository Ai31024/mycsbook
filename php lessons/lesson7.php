<?php
include("myDB_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7</title>
</head>

<body>
    <?php
    $books = ["The Alchemist", "The Bloodline", "Spy The Lie"];
    ?>
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>{$book}(╯°□°）╯︵ ┻━┻</li>";
        }
        ?>
    </ul>
</body>

</html>