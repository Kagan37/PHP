<?php

class WitajScott {
    private $imie;

    public function __construct($imie) {
        $this->imie = $imie;
        echo "Witajcie wszyscy, jestem {$this->imie}.<br>";
    }
}
$scott = new WitajScott("Scott");

?>

