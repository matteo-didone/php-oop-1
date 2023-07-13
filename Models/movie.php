<?php 

class Movie
{
    // Declaring instance variables regarding movie
    public string $movie_title;
    public int $release_year;
    public array $movie_genre;
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
        array $genre,
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

    // Getter and Setter Methods

    // Defining method to get movie title
    public function getMovieTitle()
    {
        return $this->movie_title;
    }

    // Defining method to set movie title
    public function setMovieTitle($title)
    {
        $this->movie_title = $title;
    }

    // Defining method to get movie release year
    public function getReleaseYear()
    {
        return $this->release_year;
    }

    // Defining method to set movie release year
    public function setReleaseYear($year)
    {
        $this->release_year = $year;
    }

    // Defining method to get movie genre
    public function getMovieGenre()
    {
        return $this->movie_genre;
    }

    // Defining method to set movie genre
    public function setMovieGenre($genre)
    {
        $this->movie_genre = $genre;
    }

    // Defining method to get movie director
    public function getMovieDirector()
    {
        return $this->movie_director;
    }

    // Defining method to set movie director
    public function setMovieDirector($director)
    {
        $this->movie_director = $director;
    }

    // Defining method to get movie rating

    public function getMovieRating()
    {
        return $this->movie_rating;
    }

    // Defining method to set movie rating
    public function setMovieRating($rating)
    {
        $this->movie_rating = $rating;
    }

    // Defining method to get movie cast
    public function getMovieCast()
    {
        return $this->movie_cast;
    }

    // Defining method to set movie cast
    public function setMovieCast($cast)
    {
        $this->movie_cast = $cast;
    }

    // Defining method to get movie description
    public function getMovieDescription()
    {
        return $this->movie_description;
    }

    // Defining method to set movie description
    public function setMovieDescription($description)
    {
        $this->movie_description = $description;
    }

    // Defining method to get movie distributor
    public function getMovieDistributor()
    {
        return $this->movie_distributor;
    }

    // Defining method to set movie distributor
    public function setMovieDistributor($distributor)
    {
        $this->movie_distributor = $distributor;
    }

    // Defining method to get movie production studio
    public function getMovieProductionStudio()
    {
        return $this->movie_production_studio;
    }

    // Defining method to set movie production studio
    public function setMovieProductionStudio($production_studio)
    {
        $this->movie_production_studio = $production_studio;
    }

    // Defining method to get movie info
    public function getMovieInfo()
    {
        return [
            'Title' => $this->movie_title,
            'Release Year' => $this->release_year,
            'Genre' => $this->movie_genre,
            'Director' => $this->movie_director,
            'Rating' => $this->movie_rating,
            'Cast' => $this->movie_cast,
            'Description' => $this->movie_description,
            'Distributor' => $this->movie_distributor,
            'Production Studio' => $this->movie_production_studio
        ];
    }

}

?>


<?php
// Creating instances of Movie class and assigning them to variables $classicMovie and $modernMovie
$classicMovie = new Movie(
    'The Godfather',
    1972,
    ['Crime'],
    'Francis Ford Coppola',
    'R',
    ['Marlon Brando', 'Al Pacino', 'James Caan', 'Robert Duvall'],
    'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
    'Paramount Pictures',
    'Paramount Pictures'
);

var_dump($classicMovie);

$modernMovie = new Movie(
    'The Dark Knight',
    2008,
    ['Action', 'Crime', 'Drama'],
    'Christopher Nolan',
    'PG-13',
    ['Christian Bale', 'Heath Ledger', 'Aaron Eckhart', 'Michael Caine'],
    'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
    'Warner Bros. Pictures',
    'Warner Bros. Pictures'
);

var_dump($modernMovie);

?>