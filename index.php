<?php

    class movie {

        //=> all’interno della classe sono dichiarate delle variabili d’istanza
        public $titolo;
        public $genere;
        public $orario;
        public $durata;

        //=> all’interno della classe è definito un costruttore
        public function __construct($titolo, $genere)
        {
            $this -> titolo = $titolo;
            $this -> genere = $genere;
        }

        //=> all’interno della classe è definito almeno un metodo
        public function setDurata (){
            $this -> durata += 20;
        }
    }

    //- vengono istanziati almeno due oggetti ‘Movie’
    $guardianiDellaGalassia = new movie ('guardiani della galassia','fantascienza');
    $uncharted = new movie ('uncharted','azione');

    //stampati a schermo i valori delle relative proprietà
    echo $guardianiDellaGalassia -> setDurata(60);
?>