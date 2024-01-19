<?php

class Student {
    private $imie;
    private $wiek;
    private $klasa;

    public function __construct($imie, $wiek, $klasa) {
        $this->imie = $imie;
        $this->wiek = $wiek;
        $this->klasa = $klasa;
    }

    public function wyswietlInformacje() {
        echo "Imię: {$this->imie}<br>";
        echo "Wiek: {$this->wiek}<br>";
        echo "Klasa: {$this->klasa}<br>";
    }
}
$student = new Student("Jan Kowalski", 20, "3A");
$student->wyswietlInformacje();

?>
