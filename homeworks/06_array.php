<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>06_array</title>
</head>

<body>

    <?php
        $usernames = [
            'Emil',
            'Anna',
            'Desi',
            'Kris'
        ];
    ?>

    <h1>Top performing users</h1>

    <ol>
        <?php foreach ($usernames as $username) :?>
            <li><?= $username?></li>
        <?php endforeach;?>
    </ol>

</body>
</html>