<?php
require_once "traits/MovieInfoTrait.php";

spl_autoload_register(function($className) {
    $file = __DIR__ . "/includes/classes/" . $className . ".php";
    if (file_exists($file)) {
        require_once $file;
    }
});

require_once __DIR__ . "/traits/MovieInfoTrait.php";
require_once __DIR__ . "/includes/classes/Movies.php";
require_once __DIR__ . "/includes/classes/Comedy.php";
require_once __DIR__ . "/includes/classes/DarkComedy.php";
require_once __DIR__ . "/includes/classes/Action.php";
require_once __DIR__ . "/includes/classes/Superhero.php";
require_once __DIR__ . "/includes/classes/Romantic.php";
require_once __DIR__ . "/includes/classes/Romcon.php";
require_once __DIR__ . "/includes/classes/TeenRomance.php";
require_once __DIR__ . "/includes/classes/Documentary.php";


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
$movie1->duration = 95;
showMovieInfo($movie1);

$movie2 = new Action();
$movie2->title = "Thunder Strike";
$movie2->year = 2010;
$movie2->duration = 120;
showMovieInfo($movie2);

$movie3 = new Romantic();
$movie3->title = "Love in Paris";
$movie3->year = 2018;
showMovieInfo($movie3);

$movie4 = new Superhero();
$movie4->title = "Iron Guardian";
$movie4->year = 2021;
$movie4->duration = 140;
showMovieInfo($movie4);

$movie5 = new TeenRomance();
$movie5->title = "Summer Crush";
$movie5->year = 2019;
$movie5->duration = 105;
showMovieInfo($movie5);

$movie6 = new RomCom();
$movie6->title = "Laugh and Love";
$movie6->year = 2022;
$movie6->duration = 110;
showMovieInfo($movie6);