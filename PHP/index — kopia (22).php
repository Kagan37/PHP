<?php

class SilniaCalculator {
    public static function obliczSilnie($liczba) {
        if ($liczba < 0) {
            return "Silnia niezdefiniowana dla liczb ujemnych.";
        }
        if ($liczba === 0 || $liczba === 1) {
            return 1;
        }
        return $liczba * self::obliczSilnie($liczba - 1);
    }
}
$liczba = 5;
$silnia = SilniaCalculator::obliczSilnie($liczba);

echo "Silnia z $liczba wynosi: $silnia<br>";

?>

