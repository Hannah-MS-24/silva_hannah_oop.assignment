<?php
require_once __DIR__ . '/Movies.php';
require_once __DIR__ . '/../../traits/MovieInfoTrait.php';

class Romantic extends Movies
{
    public $duration = 120;
    protected $numberOfActors = 10;
    use MovieInfoTrait;

    public function releasedYear()
    {
        parent::releasedYear();
        echo "<p>This is a romantic movie with a duration of " . $this->duration . " minutes.</p>";
    }

    public function describe()
    {
        echo "<p>This movie tells a romantic love story.</p>";
    }
}