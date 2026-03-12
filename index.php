<?php
require_once "traits/MovieInfoTrait.php";

spl_autoload_register(function($className) {
    $file = __DIR__ . "/classes/includes/" . $className . ".php";
    if (file_exists($file)) {
        require_once $file;
    }
});

function showMovieInfo(Movies $movie)
{
    $movie->releasedYear();
    $movie->play();
    
    if (method_exists($movie, 'describe')) {
        $movie->describe();
    }
    
    if (method_exists($movie, 'showAudience')) {
        $movie->showAudience();
    }
    
    echo "<hr>";
}

$movie1 = new DarkComedy();
$movie1->title = "Funny Shadows";
$movie1->year = 2005;
$movie1->duration