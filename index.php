<?php

class Movie
{
    private string $name;
    private string $date;
    private string $actors;
    private string $duration;
    private string $director;
    private string $genre;
    private int $star;

    public function __construct($_name, $_date) {
        $this -> name = $_name;
        $this -> date = $_date;
    }

    public function getName() {
        return $this -> name;
    }

    public function getDate() {
        return 'Uscita del film: ' . $this -> date;
    }

    public function getActors() {
        return $this -> actors;
    }

    public function setActors() {
        $this->actors = $actors;
    }

    public function getDuration() {
        return $this -> duration;
    }

    public function getDirector() {
        return $this -> director;
    }

    public function getGenre() {
        return $this -> genre;
    }

    public function getStar() {
        return $this -> star;
    }

    public function setStar():float {
        if($star > 0 && $star < 5) {
            $this -> star = $star;
        }
    }
}

$iRobot = new Movie('i Robot', '22-10-2004', 'Will Smith');
$iRobot-> getActors('Will Smith, Briget Moynahan, Alan Tudyk, Bruce Greenwood')
?>

<h1><?= $iRobot->getName() ?></h1>
<p><?= $iRobot->getDate() ?></p>
<p><?= $iRobot->getActors() ?></p>
