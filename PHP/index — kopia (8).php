<?php

class KontoBankowe {
    private $numerKonta;
    private $saldo;
    public function __construct($numerKonta, $saldo = 0) {
        $this->numerKonta = $numerKonta;
        $this->saldo = $saldo;
    }

    public function wpłacPieniądze($kwota) {
        if ($kwota > 0) {
            $this->saldo += $kwota;
            echo "Wpłata udana. Aktualne saldo: {$this->saldo}<br>";
        } else {
            echo "Błąd: Nieprawidłowa kwota wpłaty<br>";
        }
    }
    public function wypłaćPieniądze($kwota) {
        if ($kwota > 0 && $this->saldo >= $kwota) {
            $this->saldo -= $kwota;
            echo "Wypłata udana. Aktualne saldo: {$this->saldo}<br>";
        } else {
            echo "Błąd: Nieprawidłowa kwota wypłaty lub niewystarczające saldo<br>";
        }
    }

    public function pobierzSaldo() {
        return $this->saldo;
    }
}
$konto = new KontoBankowe("123456789", 1000);
echo "Saldo początkowe: {$konto->pobierzSaldo()}<br>";
$konto->wpłacPieniądze(500);
$konto->wypłaćPieniądze(200);
$konto->wypłaćPieniądze(800); 
echo "Saldo końcowe: {$konto->pobierzSaldo()}<br>";

?>
