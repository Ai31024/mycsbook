<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 18</title>
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

    // Creating function in PHP using two argument.
    function filterBySelectAuthorAsVariable($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) { // Author key is compared with Author variable.
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

    // Here, instead of using function directly in loop, we created and assigned a variable,
    // That holds the function along with the arguments.
    $filteredBooks = filterBySelectAuthorAsVariable($books, 'Paulo Coelho');

    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <!--Here 'Paulo Coelho' is passed as argument for $author-->

            <a href="<?= $book['purchaseUrl'] ?>">

                <li><?= $book['name']; ?> (<?= $book['revision']; ?>) - <?= $book['author'] ?></li>

            </a>

        <?php endforeach; ?>
    </ul>

</body>

</html>