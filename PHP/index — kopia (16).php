<?php
class Kalkulator {
    private $wynik;
    public function __construct() {
        $this->wynik = 0;
    }
    public function dodaj($liczba) {
        $this->wynik += $liczba;
    }
    public function odejmij($liczba) {
        $this->wynik -= $liczba;
    }
    public function pomnóż($liczba) {
        $this->wynik *= $liczba;
    }
    public function podziel($liczba) {
        if ($liczba != 0) {
            $this->wynik /= $liczba;
        } else {
            echo "Błąd: Nie można dzielić przez zero.<br>";
        }
    }
    public function pobierzWynik() {
        return $this->wynik;
    }
}
$kalkulator = new Kalkulator();
$kalkulator->dodaj(5);
echo "Wynik po dodaniu 5: " . $kalkulator->pobierzWynik() . "<br>";
$kalkulator->odejmij(2);
echo "Wynik po odjęciu 2: " . $kalkulator->pobierzWynik() . "<br>";
$kalkulator->pomnóż(3);
echo "Wynik po pomnożeniu przez 3: " . $kalkulator->pobierzWynik() . "<br>";
$kalkulator->podziel(2);
echo "Wynik po podzieleniu przez 2: " . $kalkulator->pobierzWynik() . "<br>";
$kalkulator->podziel(0); 

?>
