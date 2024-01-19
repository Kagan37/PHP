<?php

class Plik {
    private $nazwa;
    private $rozmiar;
    public function __construct($nazwa, $rozmiar) {
        $this->nazwa = $nazwa;
        $this->rozmiar = $rozmiar;
    }
    public function getNazwa() {
        return $this->nazwa;
    }
    public function getRozmiar() {
        return $this->rozmiar;
    }
    public static function obliczCalkowityRozmiar(array $pliki) {
        $calkowityRozmiar = 0;
        foreach ($pliki as $plik) {
            if ($plik instanceof Plik) {
                $calkowityRozmiar += $plik->getRozmiar();
            } else {
                throw new InvalidArgumentException("Nieprawidłowy obiekt przekazany do metody.");
            }
        }
        return $calkowityRozmiar;
    }
}
$plik1 = new Plik("plik1.txt", 1024); 
$plik2 = new Plik("plik2.txt", 2048); 
$plik3 = new Plik("plik3.txt", 3072); 

$pliki = [$plik1, $plik2, $plik3];

$calkowityRozmiar = Plik::obliczCalkowityRozmiar($pliki);

echo "Całkowity rozmiar plików: $calkowityRozmiar bajtów<br>";

?>
