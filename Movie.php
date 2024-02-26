<?php

class Movie 
{
    public $id;
    public $title;
    public $genre;
    public $director;
    public $year;

    public function __construct($id, $title, $genre, $director, $year)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->year = $year;
    }
}

?>
