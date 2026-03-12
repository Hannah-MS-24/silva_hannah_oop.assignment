<?php
require_once __DIR__ . '/Romantic.php';

class RomCom extends Romantic
{
    public function description()
    {
        echo "<p>This movie mixes romance and comedy.</p>";
    }
}