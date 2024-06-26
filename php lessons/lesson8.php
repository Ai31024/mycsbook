<?php
include("myDB_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 8</title>
</head>

<body>
    <h1>Recommended Books: </h1>
    <?php
    $books = [
        "The Alchemist",
        "Spy the lie",
        "The Killing Floor"
    ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>