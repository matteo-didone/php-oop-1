<?php
/*
Definita una classe ‘Movie’ :
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice,
suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo
chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/
?>

<?php

class Movie
{
    // Declaring instance variables regarding movie
    public string $movie_title;
    public int $release_year;
    public string $movie_genre;
    public string $movie_director;
    public string $movie_rating;
    public array $movie_cast;
    public string $movie_description;
    public string $movie_distributor;
    public string $movie_production_studio;

    // Defining constructor method
    public function __construct(
        string $title,
        int $year,
        string $genre,
        string $director,
        string $rating,
        array $cast,
        string $description,
        string $distributor,
        string $production_studio
    ) {
        $this->movie_title = $title;
        $this->release_year = $year;
        $this->movie_genre = $genre;
        $this->movie_director = $director;
        $this->movie_rating = $rating;
        $this->movie_cast = $cast;
        $this->movie_description = $description;
        $this->movie_distributor = $distributor;
        $this->movie_production_studio = $production_studio;
    }

    // Defining method to get movie title
    public function getMovieTitle()
    {
        return $this->movie_title;
    }
}

?>


<?php
// Creating instances of Movie class and assigning them to variables $classicMovie and $modernMovie
$classicMovie = new Movie(
    'The Godfather',
    1972,
    'Crime',
    'Francis Ford Coppola',
    'R',
    ['Marlon Brando', 'Al Pacino', 'James Caan', 'Robert Duvall'],
    'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
    'Paramount Pictures',
    'Paramount Pictures'
);

$modernMovie = new Movie(
    'The Dark Knight',
    2008,
    'Action',
    'Christopher Nolan',
    'PG-13',
    ['Christian Bale', 'Heath Ledger', 'Aaron Eckhart', 'Michael Caine'],
    'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
    'Warner Bros. Pictures',
    'Warner Bros. Pictures'
);

?>