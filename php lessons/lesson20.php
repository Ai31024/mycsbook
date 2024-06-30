<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 20</title>
</head>

<body>

    <?php

    // Here I have created two arrays.
    // Array 1.
    $tools = [
        [
            'name' => 'Hammer',
            'make' => 'Taparia',
            'year' => '2009'
        ],
        [
            'name' => 'Drill Machine',
            'make' => 'Black & Decker',
            'year' => '2007'
        ],
        [
            'name' => 'Screw Driver',
            'make' => 'Bosch',
            'year' => '2005'
        ],
        [
            'name' => 'Measuring Tape',
            'make' => 'Generic',
            'year' => '2005'
        ]
    ];

    // Array 2.
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
    // Creating a generic function.
    function filter($items, $key, $value)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) { // Author key is compared with Author variable.
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    // Here, instead of using function directly in loop, we created and assigned a variable,
    // That holds the function along with the arguments.
    // Here, variable left to equal sign is assigned with lambda function on the right.
    $filteredBooks = filter($books, 'author', 'Paulo Coelho');

    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <!--Here 'Paulo Coelho' is passed as argument for $author-->

            <a href="<?= $book['purchaseUrl'] ?>">

                <li><?= $book['name']; ?> (<?= $book['revision']; ?>) - <?= $book['author']; ?></li>

            </a>

        <?php endforeach; ?>
    </ul>

</body>

</html>