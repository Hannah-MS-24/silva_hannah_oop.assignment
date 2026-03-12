<?php
require_once __DIR__ . '/Action.php';

class Superhero extends Action
{
    public function description()
    {
        echo "<p>This is a superhero action movie.</p>";
    }
}