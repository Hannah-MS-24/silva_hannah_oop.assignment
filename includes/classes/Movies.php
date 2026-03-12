<?php

interface MoviesInterface
{
    public function releasedYear();
}

class Movies implements MoviesInterface
{
    public $title;
    public $year = 2000;
    public $duration;

    public function releasedYear()
    {
        echo "<p>The movie <strong>" . $this->title . "</strong> was released in " . $this->year . ".</p>";
    }

    public function play()
    {
        echo "<p>The movie <strong>" . $this->title . "</strong> is now playing.</p>";
    }

    public function describe()
    {
        echo "<p>This movie lasts " . $this->duration . " minutes.</p>";
    }

    public function showAudience()
    {
        echo "<p>This movie is suitable for general audiences.</p>";
    }
}