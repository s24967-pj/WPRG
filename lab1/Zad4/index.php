<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 4</title>
</head>
<body>
<h1>Kalkulator</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Liczba 1: <input type="number" name="liczba1"><br><br>
    Liczba 2: <input type="number" name="liczba2"><br><br>
    <input type="submit" name="submit" value="Oblicz">
</form>

<?php

    $liczba1 = $_POST["liczba1"];
    $liczba2 = $_POST["liczba2"];

    $wynik_dodawania = $liczba1 + $liczba2;
    $wynik_odejmowania = $liczba1 - $liczba2;
    $wynik_mnozenia = $liczba1 * $liczba2;
    if ($liczba2 != 0) {
        $wynik_dzielenia = $liczba1 / $liczba2;
        $wynik_modulo = $liczba1 % $liczba2;
    } else {
        $wynik_dzielenia = "Nie można dzielić przez zero!";
        $wynik_modulo = "Nie można dzielić przez zero!";
    }

    echo "<h2>Wyniki dla liczb $liczba1 i $liczba2:</h2>";
    echo "<ul>";
    echo "<li>Dodawanie: $wynik_dodawania</li>";
    echo "<li>Odejmowanie: $wynik_odejmowania</li>";
    echo "<li>Mnożenie: $wynik_mnozenia</li>";
    echo "<li>Dzielenie: $wynik_dzielenia</li>";
    echo "<li>Dzielenie modulo: $wynik_modulo</li>";
    echo "</ul>";

?>
</body>
</html>

