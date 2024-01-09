<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>08_Functions and filters</title>
</head>

<body>
    <?php
        $movies =
            [
                [
                    'name' => 'movie_1',
                    'director' => 'director_1',
                    'year' => 1955
                ],
                [
                    'name' => 'movie_2',
                    'director' => 'director_2',
                    'year' => 1999
                ],
                [
                    'name' => 'movie_3',
                    'director' => 'director_3',
                    'year' => 1785
                ],
                [
                    'name' => 'movie_4',
                    'director' => 'director_4',
                    'year' => 2021
                ]
            ];

        function filterByRecent($movies)
        {
            $filteredMovies = [];

            foreach ($movies as $movie) :
                if ($movie['year'] >= 1999)
                {
                    $filteredMovies[] = $movie;
                }
            endforeach;

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>