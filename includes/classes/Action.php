<?php
require_once __DIR__ . '/Movies.php';

class Action extends Movies
{
    public $stunts = 5;

    public function releasedYear()
    {
        parent::releasedYear();
        echo "<p>This action movie includes " . $this->stunts . " major stunt scenes.</p>";
    }

    public function play()
    {
        echo "<p>The action movie starts with an intense scene!</p>";
    }
}