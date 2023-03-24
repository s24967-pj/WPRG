<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator pierwiastka kwadratowego</title>
</head>
<body>
<h1>Kalkulator pierwiastka kwadratowego</h1>

<?php
$pi = pi();
$pierwiastek = sqrt($pi);
$pierwiastek = number_format($pierwiastek, 2);
echo "<h2>Pierwiastek kwadratowy z PI wynosi: $pierwiastek</h2>";
?>
</body>
</html>

