<?php
require_once __DIR__ . '/Movies.php';
require_once __DIR__ . '/../../traits/MovieInfoTrait.php';

class Comedy extends Movies
{
    public $minimumAge = 10;
    use MovieInfoTrait;

    public function rating()
    {
        echo "<h2>This comedy movie is recommended for ages " . $this->minimumAge . "+</h2>";
    }

    public function showAudience()
    {
        echo "<p>This comedy movie is recommended for ages " . $this->minimumAge . "+</p>";
    }

    public function describe()
    {
        echo "<p>This movie focuses on humor and funny situations.</p>";
    }

    public function releasedYear()
    {
        $this->rating();
        parent::releasedYear();
    }
}