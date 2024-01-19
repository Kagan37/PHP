<?php

class Pojazd {
    private $marka;
    private $model;
    private $rok;

    public function __construct($marka, $model, $rok) {
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
    }

    public function wyswietlSzczegoly() {
        echo "Marka: {$this->marka}<br>";
        echo "Model: {$this->model}<br>";
        echo "Rok produkcji: {$this->rok}<br>";
    }

    // Gettery i settery mogą być dodane, jeśli są potrzebne.
}

// Przykładowe użycie klasy Pojazd
$mojPojazd = new Pojazd("Toyota", "Camry", 2020);
$mojPojazd->wyswietlSzczegoly();

?>
