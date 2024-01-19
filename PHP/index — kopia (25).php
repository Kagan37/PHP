<?php

class Kalkulator {
    private $liczba1;
    private $liczba2;
    public function __construct($liczba1, $liczba2) {
        $this->liczba1 = $liczba1;
        $this->liczba2 = $liczba2;
    }
    public function dodaj() {
        return $this->liczba1 + $this->liczba2;
    }
    public function odejmij() {
        return $this->liczba1 - $this->liczba2;
    }
    public function pomnóż() {
        return $this->liczba1 * $this->liczba2;
    }
    public function podziel() {
        if ($this->liczba2 != 0) {
            return $this->liczba1 / $this->liczba2;
        } else {
            return "Błąd: Nie można dzielić przez zero.";
        }
    }
}
$mycalc = new Kalkulator(12, 6);
echo "Dodawanie: " . $mycalc->dodaj() . "<br>";
echo "Odejmowanie: " . $mycalc->odejmij() . "<br>";
echo "Mnożenie: " . $mycalc->pomnóż() . "<br>";
echo "Dzielenie: " . $mycalc->podziel() . "<br>";

?>
