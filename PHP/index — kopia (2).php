<?php

class Kolo {
    private $promien;

    public function __construct($promien) {
        $this->promien = $promien;
    }

    public function obliczPowierzchnie() {
        return pi() * pow($this->promien, 2);
    }

    public function obliczObwod() {
        return 2 * pi() * $this->promien;
    }
}
$mojeKolo = new Kolo(5);

echo 'Powierzchnia koła: ' . $mojeKolo->obliczPowierzchnie() . ' jednostek kwadratowych<br>';
echo 'Obwód koła: ' . $mojeKolo->obliczObwod() . ' jednostek<br>';

?>
