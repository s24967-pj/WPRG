<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator pola prostokąta</title>
</head>
<body>
<h1>Kalkulator pola prostokąta</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Bok a: <input type="number" name="a"><br><br>
    Bok b: <input type="number" name="b"><br><br>
    <input type="submit" name="submit" value="Oblicz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $pole = $a * $b;
    echo "<h2>Pole prostokąta o bokach $a i $b wynosi: $pole</h2>";
}
?>
</body>
</html>
