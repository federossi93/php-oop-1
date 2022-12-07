<?php
/*definisci una classe Movie
- all'interno della classe sono dichiarate delle variabili d'istanza
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà*/


class Movie{
    public $title;
    public $description;
    public $voto;

    function __construct(string $title, string $description, int $voto) {
        $this->title = $title;
        $this->description = $description;
        $this->voto = $voto;
    }
    
}


$matrix = new Movie('Matrix', 'lorem', 7);
$TreUominiEUnaGamba = new Movie('Tre uomini e una gamba', 'lorem', 7);

var_dump($matrix);
var_dump($TreUominiEUnaGamba);

?>