<?php

include_once __DIR__ . "/models/Movie.php";

$movie1 = new Movie(1, "lord of the rings", "fantasy");
$movie2 = new Movie(2, "the hobbit", "fantasy");

$movies = [$movie1, $movie2];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php foreach ($movies as $movie) : ?>
            <li>
                <h2> <?= $movie->title ?></h2>
                <p><?= $movie->genre ?></p>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>