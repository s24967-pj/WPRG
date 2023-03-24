<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 5</title>
</head>
<body>
<h1>Zadanie 5</h1>
<form method="post" >
    Tekst 1: <input type="text" name="text1"><br><br>
    Tekst 2: <input type="text" name="text2"><br><br>
    <input type="submit" name="submit" >
</form>

<?php

    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    
    echo "<h2>%$text2 $text1%$#</h2>";

?>
</body>
</html>
