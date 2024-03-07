<?php

class Movie {
    // Variabili di istanza
    public $title;
    public $director;
    public $year;
    public $actors;
    public $genres;
    public $language;
    
    // Costruttore per inizializzare le variabili del film
    public function __construct($_title, $_director,  $_year, $_actors, $_genres, $_language) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->actors = $_actors;
        $this->genres = $_genres;
        $this->language = $_language;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getYear() {
        return $this->year;
    }

    public function getActors() {
        return $this->actors;
    }

    public function getGenres() {
        return $this->genres;
    }

    public function getLanguage() {
        return $this->language;
    }
}

//Istanzio due oggetti Movie
$movie1 = new Movie("Il Gladiatore", "Ridley Scott", 2000, ["Russell Crowe", "Joaquin Phoenix"], ["Action", "Drama"], "English");
$movie2 = new Movie("Karate Kid", "John G. Avildsen", 1984, ["Ralph Macchio", "Pat Morita"], ["Drama", "Sport"], "English");

//Stampa il valore di movie1 e movie2
var_dump($movie1,$movie2);

?>