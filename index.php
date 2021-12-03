<?php 
require_once "movie.php";
require_once "movieArr.php";
require_once "data.php";


$movie1 = new Movie("Shang-Chi e la leggenda dei Dieci Anelli", "Shang-Chi and the Legend of the Ten Rings", "Inglese", "Avventura", 2021);
$movie2 = new Movie("Venom - La furia di Carnage", "Venom: Let There Be Carnage", "Inglese", "Thriller", 2021);
$movie3 = new Movie("Eternals", "Eternals", "Inglese", "Fantascienza", 2021);

// var_dump($movie1);
// var_dump($movie2);
// var_dump($movie3);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>PHP opp</title>
</head>

<body>

  <div class="container pt-5 pb-5 mb-5">
    <div class="ms-0">
      
      <!-- Senza Array -->
      <h2 class="text-primary fw-bold pb-3">Senza Array</h2>
      <div class="d-flex justify-content-between">
        <?php 
          echo $movie1->createList($movie1);
          echo $movie2->createList($movie2);
          echo $movie3->createList($movie3);
        ?>
      </div>
      
      <!-- Con Array -->
      <h2 class="text-primary fw-bold pb-3 pt-5">Con Array</h2>
      <div class="d-flex justify-content-between">
          <?php
            foreach($movieList as $movie){
              $singleMovie = new MovieArr($movie);
              echo $singleMovie->createListArr();
            }
          ?>
      </div>

    </div>
  </div>

</body>

</html>



