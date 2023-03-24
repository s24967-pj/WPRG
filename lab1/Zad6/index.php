<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 6</title>
</head>
<body>
<h1>Trojkat</h1>
<form method="post">
    <label>Długość boku a:</label><input type="number" name="a"><br>
    <label>Długość boku b:</label><input type="number" name="b"><br>
    <label>Długość boku c:</label><input type="number" name="c"><br>
    <button type="submit">Sprawdź</button>
</form>
<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "<p>Podane boki tworzą trójkąt.</p>";
    } else {
        echo "<p>Podane boki nie tworzą trójkąta.</p>";
    }

?>
</body>
</html>