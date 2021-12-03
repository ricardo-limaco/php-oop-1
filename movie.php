<?php

// Nome classe in PascalCase
class Movie {
  public $title;
  public $originalTitle;
  public $language;
  public $genre;
  public $year;


  // Construct  
  function __construct($_title, $_originalTitle, $_language, $_genre, $_year) {
    $this->setTitle($_title);
    $this->setOriginalTitle($_originalTitle);
    $this->setLanguage($_language);
    $this->setGenre($_genre);
    $this->setYear($_year);
  }


  // Title
  // il get ritorna il valore della variabile
  public function getTitle(){
    return $this->title;
  }
  // il set serve per modificare la variabile
  public function setTitle($_title){
    return $this->title = $_title;
  }

  // Original Title
  public function getOriginalTitle(){
    return $this->originalTitle;
  }

  public function setOriginalTitle($_originalTitle){
    return $this->originalTitle = $_originalTitle;
  }

  // Language
  public function getLanguage(){
    return $this->language;
  }

  public function setLanguage($_language){
    return $this->language = $_language;
  }

  // Genre
  public function getGenre(){
    return $this->genre;
  }

  public function setGenre($_genre){
    return $this->genre = $_genre;
  }

  // Year
  public function getYear(){
    return $this->year;
  }

  public function setYear($_year){
    return $this->year = $_year;
  }

  // Methods
  public function createList($_movie){
    return "<div class='card' style='width: 18rem;'>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item'>$_movie->title</li>
                <li class='list-group-item'>$_movie->originalTitle</li>
                <li class='list-group-item'>$_movie->language</li>
                <li class='list-group-item'>$_movie->genre</li>
                <li class='list-group-item'>$_movie->year</li>
              </ul>
            </div>";
    }

}
