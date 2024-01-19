<?php

interface Resizable {
    public function resize($factor);
}

class Kwadrat implements Resizable {
    private $bok;

    public function __construct($bok) {
        $this->bok = $bok;
    }

    public function resize($factor) {
        $this->bok *= $factor;
    }

    public function getBok() {
        return $this->bok;
    }
}
$kwadrat = new Kwadrat(4);
echo 'Początkowy bok kwadratu: ' . $kwadrat->getBok() . '<br>';
$kwadrat->resize(2); // Zmiana rozmiaru kwadratu
echo 'Bok kwadratu po zmianie rozmiaru: ' . $kwadrat->getBok() . '<br>';
?>
