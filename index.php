<?php

    class movie {

        //=> all’interno della classe sono dichiarate delle variabili d’istanza
        public $titolo;
        public $genere;
        public $orario;
        public $durata;

        //=> all’interno della classe è definito un costruttore
        public function __construct($titolo, $genere, $orario, $durata)
        {
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->orario = $orario;
            $this->durata = $durata;
        }

        //=> all’interno della classe è definito almeno un metodo
        public function setDurata (){
            $this->durata += 20;
        }
    }

    //- vengono istanziati almeno due oggetti ‘Movie’
    $guardianiDellaGalassia = new movie ('guardiani della galassia','fantascienza','20.00','1.50');
    $uncharted = new movie ('uncharted','azione','21.30','1.45');

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
        foreach ($guardianiDellaGalassia as $data ) {
            echo '<h1>'. $data["titolo"]  . '</h1>' . '<br>';
            echo '<p>'. $data["genere"]  . '</p>';
            echo '<p>'. $data["orario"]  . '</p>';
            echo '<p>'. $data["durata"]  . '</p>';
        }

        foreach ($uncharted as $data ) {
            echo '<h1>'. $data["titolo"]  . '</h1>' . '<br>';
            echo '<p>'. $data["genere"]  . '</p>';
            echo '<p>'. $data["orario"]  . '</p>';
            echo '<p>'. $data["durata"]  . '</p>';
        }
    ?>
    
</body>
</html>