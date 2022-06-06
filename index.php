<?php 
require_once __DIR__ .'/movies/movie.php';


$titanic = new Movie('Titanic','romantico');
echo $titanic -> getTitle();
$ritorno_al_futuro = new Movie ('Ritorno a futuro','commedia');
$movies = [
    [ 
        'title' => 'Titanic'
        'genre' => 'romantico'
    ],
    [ 
        'title' => 'Ritorno al futuro'
        'genre' => 'commedia'
    ]
    
    ];

var_dump($titanic);
var_dump($);

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>Lista Film:</h1>
    <?php
    foreach($movies as $key => $value){
        $movie = new Movie($value['title'], $value['genre']);

    ?>
    <h2> title: <?php echo $movie ->getMovie(); ?></h2>

    <h6> genre: <?php echo "{
        $movie->getMovie()}" ?></h6>

<?php
    }
?>


    ?>
</body>
</html>