<?php
class Walidacja {
    public static function walidujEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public static function walidujHaslo($haslo) {
        return strlen($haslo) >= 8;
    }

    public static function walidujTekst($tekst) {
        return !empty($tekst);
    }
}
$email = "user@example.com";
$haslo = "secretPassword";
$tekst = "Some text";

if (Walidacja::walidujEmail($email)) {
    echo "Adres e-mail jest poprawny.<br>";
} else {
    echo "Błąd: Niepoprawny adres e-mail.<br>";
}
if (Walidacja::walidujHaslo($haslo)) {
    echo "Hasło jest poprawne.<br>";
} else {
    echo "Błąd: Hasło musi mieć co najmniej 8 znaków.<br>";
}
if (Walidacja::walidujTekst($tekst)) {
    echo "Tekst jest poprawny.<br>";
} else {
    echo "Błąd: Tekst nie może być pusty.<br>";
}
