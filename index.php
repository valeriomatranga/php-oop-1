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

    function __construct(string $title, string $genre, string $year, float $time, string $img) {

        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->time = $time;
        $this->img = $img;
    }
}

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
    
</body>
</html>