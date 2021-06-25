<!-- 
create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $time;
    public $img;

    function __construct(string $title, string $genre, float $year, float $time, string $img = 'https://picsum.photos/300') {

        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->time = $time;
        $this->img = $img;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getYear(){
        return $this->year;
    }
    public function getTime(){
        return $this->time;
    }
    public function getImg(){
        return $this->img;
    }
    

    public function setTime($time){
       if ($time < 150) {
           $this->time = $time . 'film breve';
       }
    }
}
$movies = new Movie('Ritorno al Futuro', 'fantascienza',1985,130);
$movies = new Movie('Avatar', 'fantascienza',2009,160);
$movies = new Movie('Constantine', 'azione',2005,90);
$movies = new Movie('Il signore degli anelli', 'fantasy',2001,180);
var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="movie">
    <?php foreach ($movies as $movie) : ?>
        <img src="<?php $movies->getImg(); ?>" alt="">
        <div>
            <h2>Titolo: <?php echo $movies->getTitle(); ?></h2>
            <h4>Genere: <?php echo $movies->getGenre(); ?></h4>
            <p>Anno di uscita: <?php echo $movies->getYear(); ?></p>
            <p>Durata: <?php echo $movies->getTime(); ?> minuti</p>
        </div>
    <?php endforeach ?>    
    </div>
</body>
</html>