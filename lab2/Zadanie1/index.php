<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 1</title>
</head>
<body>
<h1>KALKULATOR</h1>
<form method="post">
    Wartosc 1: <input type="number" name="a"><br><br>
    Wartosc 2: <input type="number" name="b"><br><br>

    <label for="dzialanie">Wybierz dzialanie:</label>
    <select id="dzialanie" name="dzialanie" size="4" multiple>
        <option value="dodawanie">dodawanie</option>
        <option value="odejmowanie">odejmowanie</option>
        <option value="mnozenie">mnozenie</option>
        <option value="dzielenie">dzielenie</option>
    </select>

    <input type="submit" name="submit" value="Oblicz">
</form>

<?php

$a = $_POST["a"];
$b = $_POST["b"];

$dzialanie = $_POST["dzialanie"];

$wynik = $_POST;

switch( $dzialanie )
{
    case "dodawanie":
        $wynik = $a + $b;
        break;

    case "odejmowanie":
        $wynik = $a - $b;
        break;

    case "mnozenie":
        $wynik = $a * $b;
        break;

    case "dzielenie":
        $wynik = $a / $b;
        break;

    default:
        echo null;
        break;
}

echo $wynik;
?>
</body>
</html>
