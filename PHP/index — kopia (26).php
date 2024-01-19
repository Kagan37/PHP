<?php

$podanyCiąg = '12-08-2004';
$dataObject = DateTime::createFromFormat('d-m-Y', $podanyCiąg);
if ($dataObject) {
    $wynik = $dataObject->format('Y-m-d');
    echo "Oryginalny ciąg: $podanyCiąg<br>";
    echo "Skonwertowana data: $wynik<br>";
} else {
    echo "Błąd: Nieprawidłowy format daty.<br>";
}
?>

