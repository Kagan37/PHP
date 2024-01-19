<?php
interface Comparable {
    public function compareTo($other);
}
class Produkt implements Comparable {
    private $nazwa;
    private $cena;
    public function __construct($nazwa, $cena) {
        $this->nazwa = $nazwa;
        $this->cena = $cena;
    }

    public function getNazwa() {
        return $this->nazwa;
    }

    public function getCena() {
        return $this->cena;
    }

    public function compareTo($other) {
        if ($other instanceof Produkt) {
            return $this->cena - $other->getCena();
        }
        throw new InvalidArgumentException("Porównanie możliwe tylko z obiektami klasy Produkt.");
    }
}
$produkt1 = new Produkt("Laptop", 2500);
$produkt2 = new Produkt("Smartfon", 1200);
if ($produkt1->compareTo($produkt2) > 0) {
    echo "{$produkt1->getNazwa()} jest droższy od {$produkt2->getNazwa()}.<br>";
} elseif ($produkt1->compareTo($produkt2) < 0) {
    echo "{$produkt1->getNazwa()} jest tańszy od {$produkt2->getNazwa()}.<br>";
} else {
    echo "{$produkt1->getNazwa()} i {$produkt2->getNazwa()} mają taką samą cenę.<br>";
}

?>

