<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;

        }
    </style>
</head>
<body>
    <?php
        $books = [
            [
                'name' => 'Do Androids dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'The Langoliers',
                'author' => 'Unknown',
                'purchaseUrl' => 'https://example.com'
            ]

        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>