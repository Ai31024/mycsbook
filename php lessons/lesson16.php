<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 16</title>
</head>

<body>

    <?php


    $books = [
        [
            'name' => 'The Alchemist',
            'author' => 'Paulo Coelho',
            'revision' => '2005',
            'purchaseUrl' => 'https://amzn.in/d/04onnXt0'
        ],
        [
            'name' => 'Spy the Lie',
            'author' => 'Phillip Houston',
            'revision' => '2013',
            'purchaseUrl' => 'https://amzn.in/d/00ifypep'
        ],
        [
            'name' => 'Bloodline',
            'author' => 'Sidney Sheldon',
            'revision' => '2005',
            'purchaseUrl' => 'https://amzn.in/d/0bPMRgWN'
        ],
        [
            'name' => 'Zahir',
            'author' => 'Paulo Coelho',
            'revision' => '2021',
            'purchaseUrl' => 'https://amzn.in/d/0jfphDvj'
        ]
    ];

    // Creating function in PHP using single argument.
    function filterByAuthor($books)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === 'Paulo Coelho') {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

    ?>
    <ul>
        <?php foreach (filterByAuthor($books) as $book) : ?>
            <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= $book['name']; ?> (<?= $book['revision']; ?>) - <?= $book['author'] ?></li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>