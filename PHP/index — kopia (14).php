<?php

class Matematyka {
    public static function dodaj($liczba1, $liczba2) {
        return $liczba1 + $liczba2;
    }

    public static function odejmij($liczba1, $liczba2) {
        return $liczba1 - $liczba2;
    }

    public static function pomnóż($liczba1, $liczba2) {
        return $liczba1 * $liczba2;
    }
}
$wynikDodawania = Matematyka::dodaj(5, 3);
$wynikOdejmowania = Matematyka::odejmij(10, 4);
$wynikMnożenia = Matematyka::pomnóż(2, 6);

echo "Wynik dodawania: $wynikDodawania<br>";
echo "Wynik odejmowania: $wynikOdejmowania<br>";
echo "Wynik mnożenia: $wynikMnożenia<br>";
?>