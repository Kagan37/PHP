<?php

abstract class Zwierze {
    protected $nazwa;
    public function __construct($nazwa) {
        $this->nazwa = $nazwa;
    }
    abstract public function jeść();
    abstract public function wydawaćDźwięk();
}
class Pies extends Zwierze {
    public function __construct($nazwa) {
        parent::__construct($nazwa);
    }

    public function jeść() {
        echo "{$this->nazwa} je mięso.<br>";
    }

    public function wydawaćDźwięk() {
        echo "{$this->nazwa} szczeka.<br>";
    }
}
class Kot extends Zwierze {
    public function __construct($nazwa) {
        parent::__construct($nazwa);
    }
    public function jeść() {
        echo "{$this->nazwa} je ryby.<br>";
    }
    public function wydawaćDźwięk() {
        echo "{$this->nazwa} mruczy.<br>";
    }
}
class Ptak extends Zwierze {
    public function __construct($nazwa) {
        parent::__construct($nazwa);
    }
    public function jeść() {
        echo "{$this->nazwa} je nasiona.<br>";
    }
    public function wydawaćDźwięk() {
        echo "{$this->nazwa} śpiewa.<br>";
    }
}
$pies = new Pies("Burek");
$kot = new Kot("Filemon");
$ptak = new Ptak("Kanarek");

$pies->jeść();
$pies->wydawaćDźwięk();

$kot->jeść();
$kot->wydawaćDźwięk();

$ptak->jeść();
$ptak->wydawaćDźwięk();

?>
