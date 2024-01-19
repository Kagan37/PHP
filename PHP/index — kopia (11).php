<?php

class Osoba {
    private $imie;
    private $wiek;

    public function __construct($imie, $wiek) {
        $this->imie = $imie;
        $this->wiek = $wiek;
    }

    public function __toString() {
        return "Imię: {$this->imie}, Wiek: {$this->wiek} lat";
    }
}
class Pracownik extends Osoba {
    private $pensja;
    private $stanowisko;

    public function __construct($imie, $wiek, $pensja, $stanowisko) {
        parent::__construct($imie, $wiek);
        $this->pensja = $pensja;
        $this->stanowisko = $stanowisko;
    }
    public function wyswietlSzczegoly() {
        echo parent::__toString() . "<br>";
        echo "Pensja: {$this->pensja} zł<br>";
        echo "Stanowisko: {$this->stanowisko}<br>";
    }
}
$pracownik = new Pracownik("Jan", 30, 5000, "Inżynier");
$pracownik->wyswietlSzczegoly();

?>

