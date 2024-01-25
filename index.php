<?php

class Film {
    

    
    public $titolo;
    public $genere;
    public $anno;



    public function __construct($titolo, $genere, $anno) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno = $anno;
    }




    public function displayMovieInfo() {
        echo "Title: {$this->titolo}, Genre: {$this->genere}, Year: {$this->anno}\n";
    }
}


$film1 = new Film("V per Vendetta", "Azione", 2005);
$film2 = new Film("Inception", "Azione", 2010);


echo "Film 1:\n";
$film1->displayMovieInfo();


echo "\nFilm 2:\n";
$film2->displayMovieInfo();
?>
