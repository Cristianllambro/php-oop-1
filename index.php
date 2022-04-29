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
        $this->name = $_name;
        $this->date = $_date;
    }

    public function getName() {
        return $this->name;
    }

    public function getDate() {
        return 'Uscita del film: ' . $this->date;
    }

    public function getActors() {
        return 'Alcuni attori: ' . $this->actors;
    }

    public function setActors($actors) {
        $this->actors = $actors;
    }

    public function getDuration() {
        return 'Durata film: ' . $this->duration . 'min';
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }

    public function getDirector() {
        return 'Regista: ' . $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getGenre() {
        return 'Genere: ' . $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getStar() {
        return 'Valutazione: ' . $this->star;
    }

    public function setStar($star) {
        if($star > 0 && $star < 5) {
            $this->star = $star;
        }
    }
}

$iRobot = new Movie('i Robot', '22-10-2004');
$iRobot->setActors('Will Smith, Briget Moynahan, Alan Tudyk, Bruce Greenwood');
$iRobot->setDuration('1:55');
$iRobot->setDirector('Alex Proyas');
$iRobot->setGenre('Azione');
$iRobot->setStar(4);


?>

<h1>Film: <?= $iRobot->getName() ?></h1>
<p><?= $iRobot->getDate() ?></p>
<p><?= $iRobot->getDuration() ?></p>
<p><?= $iRobot->getActors() ?></p>
<p><?= $iRobot->getDirector() ?></p>
<p><?= $iRobot->getGenre() ?></p>
<p><?= $iRobot->getStar() ?></p>
