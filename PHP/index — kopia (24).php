<?php

class RóżnicaDat {
    private $data1;
    private $data2;
    public function __construct($data1, $data2) {
        $this->data1 = new DateTime($data1);
        $this->data2 = new DateTime($data2);
    }
    public function obliczRóżnicę() {
        $różnica = $this->data1->diff($this->data2);

        $lata = $różnica->y;
        $miesiące = $różnica->m;
        $dni = $różnica->d;
        return "Różnica: $lata lat, $miesiące miesięcy, $dni dni";
    }
}
$data1 = "1981-11-03";
$data2 = "2013-09-04";

$różnicaDat = new RóżnicaDat($data1, $data2);
$wynik = $różnicaDat->obliczRóżnicę();
echo $wynik;

?>
