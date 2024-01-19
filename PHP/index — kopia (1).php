<?php

class Prostokat {
    private $dlugosc;
    private $szerokosc;

    public function __construct($dlugosc, $szerokosc) {
        $this->dlugosc = $dlugosc;
        $this->szerokosc = $szerokosc;
    }

    public function obliczPowierzchnie() {
        return $this->dlugosc * $this->szerokosc;
    }

    public function obliczObwod() {
        return 2 * ($this->dlugosc + $this->szerokosc);
    }

}
$mojProstokat = new Prostokat(5, 10);

echo 'Powierzchnia prostokąta: ' . $mojProstokat->obliczPowierzchnie() . ' jednostek kwadratowych<br>';
echo 'Obwód prostokąta: ' . $mojProstokat->obliczObwod() . ' jednostek<br>';

?>
