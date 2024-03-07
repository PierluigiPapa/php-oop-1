<? php

class Movie {
     // Variabili di istanza
    public $title;
    public $director;
    public $year;
    public $actors;
    public $genres;
    public $language;
    
     // Costruttore per inizializzare le variabili del film
    public function __construct($title, $director,  $year, $actors, $genres, $language) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->actors = $actors;
        $this->genres = $genres;
        $this->language = $language;
    }
}


?>