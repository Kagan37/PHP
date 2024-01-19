<?php
class KoszykZakupowy {
    private $przedmioty;
    private $suma;
    public function __construct() {
        $this->przedmioty = [];
        $this->suma = 0;
    }
    public function dodajPrzedmiot($nazwa, $cena) {
        $this->przedmioty[] = ['nazwa' => $nazwa, 'cena' => $cena];
        $this->suma += $cena;
    }
    public function obliczCałkowityKoszt() {
        return $this->suma;
    }
    public function pobierzPrzedmioty() {
        return $this->przedmioty;
    }
}
$koszyk = new KoszykZakupowy();
$koszyk->dodajPrzedmiot("Laptop", 2500);
$koszyk->dodajPrzedmiot("Smartfon", 1200);
$koszyk->dodajPrzedmiot("Klawiatura", 100);
$koszt = $koszyk->obliczCałkowityKoszt();
echo "Całkowity koszt zakupów: $koszt zł<br>";
$przedmiotyWkoszyku = $koszyk->pobierzPrzedmioty();
echo "Przedmioty w koszyku:<br>";
foreach ($przedmiotyWkoszyku as $przedmiot) {
    echo " - {$przedmiot['nazwa']} ({$przedmiot['cena']} zł)<br>";
}