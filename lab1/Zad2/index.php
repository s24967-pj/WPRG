<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 2</title>
</head>
<body>
<h1>Kalkulator pola prostokąta</h1>
<form method="post">
    Bok a: <input type="number" name="a"><br><br>
    Bok b: <input type="number" name="b"><br><br>
    <input type="submit" name="submit" value="Oblicz">
</form>

<?php

    $a = $_POST["a"];
    $b = $_POST["b"];
    $pole = $a * $b;
    echo "<h2>Pole prostokąta o bokach $a i $b wynosi: $pole</h2>";
?>
</body>
</html>
