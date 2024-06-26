<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 10</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'The Alchemist',
            'author' => 'Paulo Coelho',
            'purchaseUrl' => 'https://amzn.in/d/04onnXt0'
        ],
        [
            'name' => 'Spy the Lie',
            'author' => 'Phillip Houston',
            'purchaseUrl' => 'https://amzn.in/d/00ifypep'
        ],
        [
            'name' => 'Bloodline',
            'author' => 'Sidney Sheldon',
            'purchaseUrl' => 'https://amzn.in/d/0bPMRgWN'
        ]
    ];

    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= $book['name']; ?></li>
            </a>
        <?php endforeach; ?>
    </ul>
</body>

</html>