<?php
require_once __DIR__ . '/Comedy.php';

class DarkComedy extends Comedy
{
    public function description()
    {
        echo "<p>This comedy has dark humor.</p>";
    }
}