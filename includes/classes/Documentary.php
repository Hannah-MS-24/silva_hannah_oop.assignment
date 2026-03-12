<?php
require_once __DIR__ . '/../../traits/MovieInfoTrait.php';

class Documentary implements MoviesInterface
{
    use MovieInfoTrait;
}