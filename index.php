<?php

include_once __DIR__ . '/Movie.php';

$movie1 = new Movie(1, "Inception", "Sci-Fi", "Christopher Nolan", 2010);
$movie2 = new Movie(2, "Avatar", "Fantasy", "James Cameron", 2009);
$movie3 = new Movie(3, "The Godfather", "Crime", "Francis Ford Coppola", 1972);
$movie4 = new Movie(4, "The Dark Knight", "Action", "Christopher Nolan", 2008);


$movies = [$movie1, $movie2, $movie3, $movie4];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="PHP Movie">
    <title>PHP Movie</title>

     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Movies</h1>
    <ul>
        <?php foreach($movies as $movie): ?>
            <li>
                <h2><?= $movie->title ?></h2>
                <h4>Regista: <?= $movie->director ?></h4>
                <p class="mb-1">Genere: <?= $movie->genre ?></p>
                <p>Anno: <?= $movie->year ?></p>
            </li>
            <?php endforeach ?>
    </ul>
    
</body>
</html>