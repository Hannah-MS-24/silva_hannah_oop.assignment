<?php
require_once __DIR__ . '/Romantic.php';

class TeenRomance extends Romantic
{
    public function description()
    {
        echo "<p>This is a teenage romantic movie.</p>";
    }
}