<?php

// Nome classe in PascalCase
class MovieArr {
  public $title;
  public $originalTitle;
  public $language;
  public $genre;
  public $year;


  // Construct  
  function __construct($_movieArr) {
    $this->setTitle($_movieArr["title"]);
    $this->setOriginalTitle($_movieArr["originalTitle"]);
    $this->setLanguage($_movieArr["language"]);
    $this->setGenre($_movieArr["genre"]);
    $this->setYear($_movieArr["year"]);
  }


  // Title
  // il get ritorna il valore della variabile
  public function getTitle(){
    return $this->title;
  }
  // il set serve per modificare la variabile
  public function setTitle($_title){
    return $this->title = "<i class='fas fa-film text-primary'></i>" . " Titolo: " . $_title;
  }

  // Original Title
  public function getOriginalTitle(){
    return $this->originalTitle;
  }

  public function setOriginalTitle($_originalTitle){
    return $this->originalTitle = "<i class='fas fa-film text-primary'></i>" . " Titolo Originale: " . $_originalTitle;
  }

  // Language
  public function getLanguage(){
    return $this->language;
  }

  public function setLanguage($_language){
    return $this->language = "<i class='fas fa-globe text-primary'></i>" . " Lingua: " . $_language;
  }

  // Genre
  public function getGenre(){
    return $this->genre;
  }

  public function setGenre($_genre){
    return $this->genre = "<i class='fas fa-scroll text-primary'></i>" . " Genere: " . $_genre;
  }

  // Year
  public function getYear(){
    return $this->year;
  }

  public function setYear($_year){
    return $this->year = "<i class='fas fa-asterisk text-primary'></i>" . " Anno: " . $_year;
  }

  // Methods
  public function createListArr(){
    return "<div class='card' style='width: 18rem;'>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item'>$this->title</li>
                <li class='list-group-item'>$this->originalTitle</li>
                <li class='list-group-item'>$this->language</li>
                <li class='list-group-item'>$this->genre</li>
                <li class='list-group-item'>$this->year</li>
              </ul>
            </div>";
  }
}
