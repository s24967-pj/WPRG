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
require_once("funkcje.php");

if (isset($_POST["submit"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $dzialanie = $_POST["dzialanie"];

    switch ($dzialanie) {
        case "dodawanie":
            $wynik = dodawanie($a, $b);
            break;

        case "odejmowanie":
            $wynik = odejmowanie($a, $b);
            break;

        case "mnozenie":
            $wynik = mnozenie($a, $b);
            break;

        case "dzielenie":
            $wynik = dzielenie($a, $b);
            break;

        default:
            $wynik = null;
            break;
    }

    echo $wynik;
}
?>
</body>
</html>