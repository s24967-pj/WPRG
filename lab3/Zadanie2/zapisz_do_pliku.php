<?php
$plik = fopen("dane.txt", "a") or die("Nie można otworzyć pliku!");

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$email = $_POST["email"];

$dane = $imie . " " . $nazwisko . " " . $email . "\n";

fwrite($plik, $dane);
fclose($plik);

echo "Dane zostały zapisane do pliku!";
?>
