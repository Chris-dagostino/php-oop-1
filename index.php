<?php

    class movie {

        //=> all’interno della classe sono dichiarate delle variabili d’istanza
        public $titolo;
        public $genere;
        public $orario;
        public $durata;

        //=> all’interno della classe è definito un costruttore
        public function __construct($titolo, $genere, $orario)
        {
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->orario = $orario;
            
        }

        //=> all’interno della classe è definito almeno un metodo
        public function setDurata ($tempo){
            $this->durata = $tempo + 20;
        }

        public function getDurata() {
            return $this->durata;
        }
    }

    //- vengono istanziati almeno due oggetti ‘Movie’
    $guardianiDellaGalassia = new movie ('guardiani della galassia','fantascienza','20.00');
    $uncharted = new movie ('uncharted','azione','21.30');


    $durata_guardianiDellaGalassia = $guardianiDellaGalassia->getDurata();
    $durata_uncharted = $uncharted->getDurata();
     

    $guardianiDellaGalassia->setDurata(50);
    $uncharted->setDurata(45); 

    //stampati a schermo i valori delle relative proprietà
    var_dump($guardianiDellaGalassia);
    var_dump($uncharted);
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


    <?php


        echo "<h1>" . $guardianiDellaGalassia->titolo  . "</h1>";
        echo "<h1>" . $guardianiDellaGalassia->genere  . "</h1>";
        echo "<h1>" . $guardianiDellaGalassia->orario  . "</h1>";
        echo "<h1>" . $guardianiDellaGalassia->durata  . "</h1>";

        echo "<hr>";

        echo "<h1>" . $uncharted->titolo  . "</h1>";
        echo "<h1>" . $uncharted->genere  . "</h1>";
        echo "<h1>" . $uncharted->orario  . "</h1>";
        echo "<h1>" . $uncharted->durata  . "</h1>";

    ?>
    
</body>
</html>