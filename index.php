<?php

class Movie
{
    private $title, $year, $warningMsg, $genre, $durationHours, $durationMinutes, $language, $originalLanguage, $rating;

    public function __construct(string $_title, int $_year)
    {
        $this->title = $_title;
        if ($_year > 1900 && $_year <= date('Y')) {
            $this->year = $_year;
        } else {
            $this->warningMsg = 'Attention! You typed an unvalid year!';
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getWrnMsg()
    {
        return $this->warningMsg;
    }

    public function setGenre(string $_genre)
    {
        $this->genre = $_genre;
        return $this;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setDurationHours(int $_durationHours)
    {
        $this->durationHours = $_durationHours . 'h';
        return $this;
    }

    public function getDurationHours()
    {
        return $this->durationHours;
    }

    public function setDurationMinutes(int $_durationMinutes)
    {
        $this->durationMinutes = $_durationMinutes . 'm';
        return $this;
    }

    public function getDurationMinutes()
    {
        return $this->durationMinutes;
    }

    public function setLanguage(string $_language)
    {
        $this->language = $_language;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setOriginalLanguage(string $_originalLanguage)
    {
        $this->originalLanguage = $_originalLanguage;
        return $this;
    }

    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    public function setRating(float $_rating)
    {
        $this->rating = $_rating . '/5';
        return $this;
    }

    public function getRating()
    {
        return $this->rating;
    }
}

$movie1 = new Movie('Doctor Strange nel Multiverso della Follia', 2022);
$movie1->setGenre('Avventura/Azione')->setDurationHours(2)->setDurationMinutes(6)->setLanguage('IT')->setOriginalLanguage('EN')->setRating(3.9);

$movie2 = new Movie('Interstellar', 2014);
$movie2->setGenre('Sci-fi/Avventura')->setDurationHours(2)->setDurationMinutes(49)->setLanguage('IT')->setOriginalLanguage('EN')->setRating(3.5);

$arr_movies = [$movie1, $movie2]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main>
        <?php
        foreach ($arr_movies as $movie) { ?>
            <div class="container">
                <div class="movie">
                    <h2><?php echo $movie->getTitle() ?></h2>
                    <div class="movie_info">
                        <span><?php echo $movie->getYear() . $movie->getWrnMsg()?></span> -
                        <span><?php echo $movie->getGenre() ?></span> -
                        <span><?php echo $movie->getDurationHours() . ' ' . $movie->getDurationMinutes() ?></span>
                    </div>
                    <div class="movie_sub_info">
                        <span>Voto: <?php echo $movie->getRating() ?></span> -
                        <span>Lingua: <?php echo $movie->getLanguage() ?></span> -
                        <span>Lingua Originale: <?php echo $movie->getOriginalLanguage() ?></span>
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </main>
</body>

</html>