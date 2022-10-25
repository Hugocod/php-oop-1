<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

class Movie {
      
     public $title;
     public $plot;
     public $genre;
     private $age = 0;

     public function getAge($release_date){

       $this -> age = 2022 - $release_date;
       return $this->age;

     }

     
     function __construct($_title, $_plot, $_genre)
     {

         $this -> title = $_title; 
         $this -> plot = $_plot; 
         $this -> genre = $_genre; 

     }

} ; 

$movie_a = new Movie(
    'From Dusk till Dawn',
    'Texas, anni novanta. Dopo una sanguinosa rapina e una rovinosa fuga, i famigerati fratelli Gecko di Kansas City, Seth e Richard, si dirigono verso la frontiera messicana con una donna in ostaggio, Gloria Hill, e una valigetta piena di soldi, per sfuggire alle autorità che li cercano senza sosta.',
    'Horror' 
    ); 

    $movie_b = new Movie(
        'Matrix',
        'Thomas Anderson lavora presso la Metacortex come programmatore di software. Di giorno è un cittadino modello, rispettoso della legge, mentre di notte vive una seconda vita, come un hacker sotto lo pseudonimo di Neo',
        'Fantascienza' 
        ); 

?>  


<div class="card">
    <h1> <?= $movie_a -> title ?> </h1>
    <h6> Genere: <?= $movie_a -> genre ?> </h6>
    <h6> Questo film è uscito <?= $movie_a -> getAge(1996) ?> anni fa </h6>
    <p>  <?= $movie_a -> plot ?> </p>
</div>

<div class="card">
    <h1> <?= $movie_b -> title ?> </h1>
    <h6> Genere: <?= $movie_b -> genre ?> </h6>
    <h6> Questo film è uscito <?= $movie_b -> getAge(1999) ?> anni fa </h6>
    <p>  <?= $movie_b -> plot ?> </p>
</div>
    
</body>
</html>